<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Order;

class Order extends Model
{
    /**
     * Makes the order each time you purchase.
     */
    public static function createOrder($user_id)
    {
    	$orders = new Order;
    	$orders->user_id = $user_id;
    	$orders->save();
    	return $orders;
    }
}
