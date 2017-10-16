<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products_services;

class products_servicesController extends Controller
{
    public function index() {
    	$products_services = products_services::all();
    }
}
