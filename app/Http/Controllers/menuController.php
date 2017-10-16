<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class menuController extends Controller
{
    public function index() {
    	$menu = menu::all();
    }
}
