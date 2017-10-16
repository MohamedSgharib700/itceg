<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\header;

class headerController extends Controller
{
   	public function index() {
    	$header = header::all();
    	
    }
}
