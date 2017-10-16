<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about_us_page;
use App\content_page;
use App\customers;
use App\manager;
use App\rport_page;
use App\slids_page;
use App\header;
use App\footer;


class content_pageController extends Controller
{
    public function about_us (){

     $abouts = about_us:: all();
     $contents = content_page:: all();
     $customers = customers:: all();
     $managers = manager:: all();
     $rports = rport_page:: all();
     $slids	= slids_page:: all();
     $headers = header:: all();
     $footers = footer::orderBy('id','desc')-> first();
     return view('about'compact('abouts','contents','customers','managers','rports','slids'));

  } 



   


}
