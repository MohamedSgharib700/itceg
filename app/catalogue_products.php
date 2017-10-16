<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalogue_products extends Model
{
    protected $table = 'catalogue_product';

    public function products()
    {
    	return $this->hasMany(products::class);
    }
}
