<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sliders;

class slidersController extends Controller
{
    public function index() {
    	$sliders = sliders::all();
    }
}
