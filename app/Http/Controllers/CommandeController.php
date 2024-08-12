<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Commande;
use App\Models\CommandeItem;
use Illuminate\Http\Request;



class CommandeController extends Controller
{
    public function index(){
        $commandes=Commande::where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        return view('commande.lister',compact('commandes'));  
    }
    
    // creation de la commande et ajout des elements du panier dans le commande item
    public function create(){
        // lecture du panier
        $paniers = Panier::where('user_id', auth()->user()->id)->get();

        // si le panier est vide la boucle ne sera pas realiser et retourne a la page d'avant
        if(count($paniers)==0){return 'vide';}
        // Creation de la commande (si numero = 0 la commande n'a pas été valider)
        $commande = Commande::create(['user_id' => auth()->user()->id,
                                    'numero'=> 0,
                                    'total'=> 0 ]);

        $total=0;
        foreach ($paniers as $panier){
            $commandeId=$commande->id; //identifiant de la commande
            $productId=$panier->product_id; //identifiant du produit
            $quantite=$panier->quantite; //nombre de produit
            $price=$panier->product->price; //prix du produit
            //ajout des elements suivant dans la table commande item
            $total+=$price * $quantite;// ->  $total= $total + $price * $quantite;
            CommandeItem::create(['commande_id'=>$commandeId,
                                    'product_id'=> $productId,
                                    'quantite'=> $quantite,
                                    'price'=>$price]);
            }
        
        $commande->update(['numero'=>9999,'total'=>$total]);//mise a jour du total
        $commande->save();
        //suppression des éléments du panier
        $paniers = Panier::where('user_id', auth()->user()->id)->delete();

        $urlPaiement=$this->stripeCheckout($total, $commande->id);
        return redirect($urlPaiement);
    }
    public function stripeCheckout($total, $commandeId)
    {
        //paramettrage de l'api
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        //url de confirmation de paiement
        $redirectUrl = route('commande.success') . '?session_id={CHECKOUT_SESSION_ID}';

        //creation de la session de paiement stripe
        $response =  $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'payment_method_types' => ['link', 'card'],
            'customer_email'=>auth()->user()->email,
            'client_reference_id'=> $commandeId,
            'line_items' => [
                [
                    'price_data'  => [
                        'product_data' => [
                            'name' => $commandeId,
                        ],
                        'unit_amount'  => 100 * $total,
                        'currency'     => 'EUR',
                    ],
                    'quantity'    => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => false
        ]);
        //génération de l'url de paiement
        return $response['url'];
    }
    //controle et validation de la commande
    public function success(Request $request){
        $stripe=new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $session=$stripe->checkout->sessions->retrieve($request->session_id);

        if ($session->payment_status==='paid' && $session->status==='complete' ){
            $commande = Commande::find($session->client_reference_id);
            
            $commande->update(['numero'=> $session->payment_intent]);
            $commande->save();
        }
        return redirect(route('commande.lister'));
    }
    public function webhook(Request $request){
        if ($request->object==='checkout.session' && $request->payment_status==='paid' && $request->status==='complete' ){
            $commande = Commande::find($request->client_reference_id);
            
            $commande->update(['numero'=> $request->payment_intent]);
            $commande->save();
        }
        return 'success';
    }
}