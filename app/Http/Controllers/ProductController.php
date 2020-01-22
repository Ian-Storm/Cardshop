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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$categories = Category::all();
    	$products = Product::all();//niet meer ::all() maar where(category_id, $id)->get()
        return view('products', ['categories' => $categories, 'products' => $products]);
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
