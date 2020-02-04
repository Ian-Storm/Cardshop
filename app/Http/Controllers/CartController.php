<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
Use App\Http\Classes\Cart;

class CartController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    /**
     * Show the products inside the cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cart = new Cart();
        $cart->getProducts();
        return view('cart');
    }

    /**
     * Adds a product to the cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addItem($cat_id, $prod_id)
    {
        $product = Product::find($prod_id);
        if(!empty($product)){
            if ($product->category_id == $cat_id) {
                $cart = new Cart();
                $cart->addProduct($product);
            }
        }
        return redirect('/category');
    }

    public function addAmount($cat_id, $prod_id)
    {
        $product = Product::find($prod_id);
        if(!empty($product)){
            if ($product->category_id == $cat_id) {
                $cart = new Cart();
                $cart->addProduct($product);
            }
        }
        return redirect()->back();
    }

    /**
     * Deletes a product in the cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete()
    {
        
    }
}
