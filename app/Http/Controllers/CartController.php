<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
Use App\Http\Classes\Cart;
use App\Http\Models\Order;
use App\Http\Models\OrderDetail;
use Auth;

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
        $products = $cart->getProducts();
        return view('cart', compact('products'));
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
        return redirect()->route('categories', ['id'=>$cat_id]);
    }

    /**
     * Changes the amount in the cart +1.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
     * Changes the amount in the cart -1 or delete the product.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function removeAmount($cat_id, $prod_id)
    {
        $product = Product::find($prod_id);
        if(!empty($product)){
            if ($product->category_id == $cat_id) {
                $cart = new Cart();
                $cart->removeProduct($product);
            }
        }
        return redirect()->back();
    }

    /**
     * Completes a order and sets it in the database.
     *
     * @return void
     */
    public function saveOrder()
    {
        $order = Order::createOrder(Auth::id());
        $cart = new Cart();
        $products = $cart->getProducts();
        for ($i=0; $i < count($products); $i++) { 
            $item = $products[$i];
            OrderDetail::createDetails($order->id, $item['product']['id'], $item['amount'], $item['product']['price'] * $item['amount']);
        }
        $cart->deleteCart();   
        return redirect()->route('home');
    }
}
