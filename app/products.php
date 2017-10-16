<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'productss';
    public $timestamps = false;

    public function catalogue()
    {
    	return $this->belongsTo(catalogue_products::class);
    }

    
}

