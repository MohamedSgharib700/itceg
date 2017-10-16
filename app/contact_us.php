<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    public $timestamps = false;
      protected $table = 'contact_uses'; 
      protected $fillable = [
        'name', 'email', 'subject','message',
        ];
}
