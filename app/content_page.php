<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content_page extends Model
{
     public $timestamps = false;

     protected $fillable = [
        'title1', 'title2', 'image1', 'image2', 'image3', 'image4', 'content1', 'content2', 'content3', 'signing'
    ];

}
