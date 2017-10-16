<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\migrations;

class migrationsController extends Controller
{
    public function index() {
    	$migrations = migrations::all();
    }
}
