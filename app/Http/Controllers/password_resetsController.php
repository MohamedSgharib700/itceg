<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\password_resets;

class password_resetsController extends Controller
{
    public function index() {
    	$password_resets = password_resets::all();
    }
}
