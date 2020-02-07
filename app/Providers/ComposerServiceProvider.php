<?php 

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use App\Http\Classes\Cart;

class ComposerServiceProvider extends ServiceProvider {

    public function boot()
    {
        View::composer('*', function($view){
        	$cart = new Cart();
    		$products = $cart->getProducts();
    		$productCount = count($products);
    	
    		$price = 0;
    		for ($i = 0; $i < $productCount; $i++) { 
    			$price += $products[$i]['product']['price'] * $products[$i]['amount'];
    		}
    		$view->with('price', $price)->with('productCount', $productCount);
		});
    }


    public function register()
    {
        //
    }
}