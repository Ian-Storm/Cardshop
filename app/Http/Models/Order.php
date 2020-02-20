<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Order;

class Order extends Model
{
    /**
     * Makes the order each time you purchase.
     *
     * @return void
     */
    public static function createOrder($user_id)
    {
    	$order = new Order;
    	$order->user_id = $user_id;
    	$order->save();
    	return $order;
    }
}
