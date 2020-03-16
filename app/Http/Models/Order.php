<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Order;
use App\Http\Models\OrderDetail;

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

    /**
     * Get the orderDetails for the order.
     *
     * @return void
     */
    public function orderDetails()
    {
        return $this->hasMany('App\Http\Models\OrderDetail');
    }


    /**
     * Get total price of all products in this order.
     * 
     * @return float
     */
    public function getTotalOrderPrice() {
        $orderDetails = $this->orderDetails;
        $totalPrice = 0;
        foreach ($orderDetails as $orderDetail) {
            $totalPrice += $orderDetail->price;
        }

        return $totalPrice;
    }

}
