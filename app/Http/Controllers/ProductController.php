<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * show last products and categories
     */

    public function index()
    {
        $categories = Category::all();
        
        //requête pour filtré à partir d'une catégorie
        $products=Product::orderBy('id', 'desc')->paginate(8);
        
        return view('product.products',compact('categories', 'products'));
    }
    //
    /***
     *PorductByCategory:   show last products by category
     * **
     */

    public function productByCategory ($id = 0) 
    {
        $categories = Category::all();

        $products=Product::where('category_id', $id)
        ->orderBy('id', 'desc')
        ->paginate(10);
        
        return view('product.products',compact('categories', 'products'));
    
    }

/***
 * *Detail show product detail
 */
    public function show(Product $product)
    {
        
        //$product = Product::findOrFail();
        //requete produit similaires 
        $products = Product::where('category_id', $product->category_id)
        ->inRandomOrder()
        ->limit(5)
        ->get();
        if (isset(auth()->user()->id)) {
            $fav = Favoris::where('user_id', '=', auth()->user()->id)
                ->where('product_id', '=', $product->id)
                ->first();
            $favs = Favoris::where('user_id', '=', auth()->user()->id)
                ->get();
        } else {
            $fav = null;
            $favs = null;
        }

        
        return  view ('product.show',compact('product', 'products','fav', 'favs'));
        
        
    }

    public function favoris(Product $product)
    {
        $fav = Favoris::where('user_id', '=', auth()->user()->id)
            ->where('product_id', '=', $product->id)
            ->first();

        if (isset($fav)) {
            $fav->delete();
        } else {
            Favoris::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id
            ]);
        }

        return back();
    }
}
