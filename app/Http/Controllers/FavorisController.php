<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use App\Models\Product;
use Illuminate\Http\Request;

class FavorisController extends Controller
{
     public function index()
    {
        $favoris = Favoris::where('user_id', auth()->user()->id)->get();
        return view('favoris.favori', compact('favoris'));
    }

    public function ajouter(Product $product)
    {
        $existFavoris = Favoris::where('user_id', auth()->user()->id)
            ->where('product_id', $product->id)
            ->first();

        if (!$existFavoris) {
            Favoris::create(['user_id' => auth()->user()->id, 'product_id' => $product->id]);
        }

        return redirect()->route('favoris.favori');
    }

    public function remove(Product $product)
    {
        $favoris = Favoris::where('user_id', auth()->user()->id)
            ->where('product_id', $product->id)
            ->first();

        if ($favoris) {
            $favoris->delete();
        }

}

}
