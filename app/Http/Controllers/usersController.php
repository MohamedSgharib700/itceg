<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class usersController extends Controller
{
    public function index() {
    	$users = users::all();
    }
}
