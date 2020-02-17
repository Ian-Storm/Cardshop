<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the category for each product.
     *
     * @return void
     */
    public function category()
    {
        return $this->hasOne('App\Http\Models\Category');
    }
}
