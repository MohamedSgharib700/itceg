<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footer;

class footerController extends Controller
{
    public function index() {
    	$footer = footer::all();
    }
}
