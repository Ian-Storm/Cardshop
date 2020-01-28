<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Http\Models\Category;

class ProductController extends Controller
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
     * Shows the product itself.
     *
     * @param int $prod_id (product)
     * @param int $cat_id (category)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($cat_id, $prod_id)
    {
        $product = Product::find($prod_id);
        if(!empty($product)){
            if ($product->category_id == $cat_id) {
                return view('product', compact('product'));
            }
        }
        return redirect()->route('categories');
    }

    /**
     * Add a product to the cart.
     *
     * @param int $id (product)
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add($id)
    {
        //add to cart
    }
}
