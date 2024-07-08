<?php

namespace App\Http\Controllers;

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
        
        $products=Product::orderBy('id', 'desc')->paginate(10);
        
        return view('product.products',compact('categories', 'products'));
    }
    //
    /***
     *PorductByCategory:   show last products by category
     * **
     */

    public function productByCategory () 
    {
        return view ('product.products');
    }

/***
 * *Detail show product detail
 */
    public function show()
    {
        
        return  view ('product.show');
        
    }

}
