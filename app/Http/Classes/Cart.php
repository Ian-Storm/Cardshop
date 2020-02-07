<?php

namespace App\Http\Classes;

Use Cookie;

class Cart 
{
	private $Cart = [];
    public function __construct(){
    	$this->Cart = json_decode(Cookie::get("ActiveCart"), true);
    }

    public function addProduct($product){
    	$doesExist = false;

    	if ($this->Cart != null) {
    		for ($i=0; $i < count($this->Cart); $i++) { 
    			$item = $this->Cart[$i];
    			if ($item['product']['id'] == $product['id']) {
    				$item['amount'] += 1;
    				$this->Cart[$i] = $item;
    				$doesExist = true;
    			} 
    		}
    	}
    	else {
    		$this->Cart = [];
    	}
    	if ($doesExist == false) {
    		array_push($this->Cart, ['product' => $product, 'amount' => 1]);
    	}
    	$this->saveCart();
    }

    public function removeProduct($product){

    	if ($this->Cart != null) {
    		for ($i=0; $i < count($this->Cart); $i++) { 
    			$item = $this->Cart[$i];
    			if ($item['product']['id'] == $product['id']) {
    				$item['amount'] -= 1;
    				if ($item['amount'] <= 0) {
    					array_splice($this->Cart, $i, 1);
    					break;
    				}
    				$this->Cart[$i] = $item;
    			} 
    		}
    	}
    	$this->saveCart();
    }

    public function getProducts(){
		return $this->Cart;
    }

    private function saveCart(){
    	Cookie::queue(Cookie::make('ActiveCart', json_encode($this->Cart), 1800));
    }

    public function deleteCart(){
    	Cookie::queue(Cookie::make('ActiveCart', '', 1800));
    }
}
