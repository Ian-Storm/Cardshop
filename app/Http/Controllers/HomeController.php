<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Order;
use App\Http\Models\OrderDetail;
use App\Http\Models\Product;
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
        $orders = Order::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        foreach ($orders as $key => $order) {
            $orders[$key]['total'] = $order->getTotalOrderPrice();
        }

        //foreach ($array as $value) {}
        //foreach ($array as $key => $value) {}
        // array('grimm' => array('lol'=>'1', 'total' => '15'), '2', 'abc')
        // $value['iets'] = 'ded'
        
        //gets the orders of the logged in user and sets it to newest first
        //"SELECT * FROM Orders WHERE user_id = 1 ORDER BY created_at DESC";

        //$totalPrice = Order::where('order_details.order_id', 'order.id')->orwhere('user.id', 'orders.user_id')->orwhere('user_id', Auth::id())->groupBy('order_id')->sum('order_details.price')->toSql();
        
        // SELECT orders.id, sum(order_details.price)
        // FROM orders, order_details, users
        // WHERE order_details.order_id = orders.id
        // and users.id = orders.user_id
        // and users.id = 1
        // group by orders.id

  /*      for ($i=0; $i < count($orders); $i++) { 
            $orders[$i]['products'] = []; //makes an empty array in the order
            $orders[$i]['totalPrice'] = 0; //makes an float in the order
            $items = OrderDetail::where('order_id', $orders[$i]['id'])->get()->toArray(); //gets all the product from the specific order
            for ($p=0; $p < count($items); $p++) { 
                $item = Product::where('id', $items[$p]['id'])->first()->toArray(); //gets the product from the database with the first matching id
                $item['amount'] = $items[$p]['amount']; //stores amount in the product
                $orders[$i]['totalPrice'] += $items[$p]['price']; //gets the total price
                array_push($orders[$i]['products'], $item); //adds a product to a products list of an order
            }
        }*/
        return view('home', compact('orders'));
    }
}
