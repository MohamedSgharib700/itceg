<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
	protected $table = 'contents';
	protected $fillable = ['title1' ,'title2' ,'title3','title4','content1','content2','content3','content4'];
    public $timestamps = false;
}
