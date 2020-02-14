<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\OrderDetail;

class OrderDetail extends Model
{
    /**
     * Sets the details of your order in the database.
     */
    public static function createDetails($order_id, $orderString)
    {
    	$orderDetail = new OrderDetail;
    	$orderDetail->order_id = $order_id;
    	$orderDetail->orderString = $orderString;
    	return $orderDetail->save();
    }
}
