<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Order;
use App\Http\Models\OrderDetail;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard and the orders.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get()->toArray(); //gets the orders of the logged in user
        $orders = array_reverse($orders); //reverses the order of the orders

        for ($i=0; $i < count($orders); $i++) { 
            $orders[$i]['products'] = []; //makes an empty array in the order
            $orders[$i]['totalPrice'] = 0; //makes an float in the order
            $items = OrderDetail::where('order_id', $orders[$i]['id'])->get()->toArray(); //gets all the product from the specific order
            for ($p=0; $p < count($items); $p++) { 
                $item = json_decode($items[$p]['orderString'], true); //makes an object from the json string
                $item['product']['amount'] = $item['amount']; //stores amount in the product
                $orders[$i]['totalPrice'] += (float)$item['product']['price'] * (float)$item['amount']; //makes total price by doing price x amount for each order
                array_push($orders[$i]['products'], $item['product']); //adds a product to a products list of an order
            }
        }
        return view('home', compact('orders'));
    }
}
