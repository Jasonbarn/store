<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * show last products and categories
     */

    public function index()
    {
        return 'home';
    }
    //
    /***
     *PorductByCategory:   show last products by category
     * **
     */

    public function productByCategory () 
    {
        return 'Product By Category';
    }

/***
 * *Detail show product detail
 */
    public function show()
    {
        return  'detail';
    }

}
