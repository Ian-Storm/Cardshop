<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\OrderDetail;

class OrderDetail extends Model
{
    /**
     * Sets the details of your order in the database.
     *
     * @return void
     */
    public static function createDetails($order_id, $product_id, $amount, $price)
    {
    	$orderDetail = new OrderDetail;
    	$orderDetail->order_id = $order_id;
    	$orderDetail->product_id = $product_id;
        $orderDetail->amount = $amount;
        $orderDetail->price = $price;
    	return $orderDetail->save();
    }
}
