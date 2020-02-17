<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the products for each category.
	 *
     * @return void
     */
    public function products()
    {
        return $this->hasMany('App\Http\Models\Product');
    }
}


