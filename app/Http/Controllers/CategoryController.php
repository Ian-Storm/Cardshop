<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Http\Models\Category;

class CategoryController extends Controller
{
    /**
     * Show the products of a category.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id = 1)
    {
    	$categories = Category::all();
    	$products = Product::where('category_id', $id)->get();
        return view('products', ['categories' => $categories, 'products' => $products]);
    }
}
