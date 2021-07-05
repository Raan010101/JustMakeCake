<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */
    function index()
    {
        $products  = $productsall = $relatedproducts = Product::get();
        
        return view('shop-grid')->with([
            'products'=>$products,
            'productsall'=>$productsall,
            'relatedproduct'=>$relatedproducts])  ;
        
    }

    function singelProducts(Request $req)
    {
        $id = $req->product_id;
        $product = Product::where('id',$id)->first();

        return view('single-product')->with('products',$product);   
    }

  
}
