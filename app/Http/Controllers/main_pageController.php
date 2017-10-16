<?php

namespace App\Http\Controllers;
//home model
use Illuminate\Http\Request;
use App\main_page;
use App\header;
use App\footer;
use App\menu;
use App\sliders;
use App\slides;
use App\content;
use App\about_us;
use App\our_client;
use App\report;
use App\Slider_title;
use App\Client_title;
use App\SiteTitle;

//about model
use App\about_us_page;
use App\content_page;
use App\customers;
use App\manager;
use App\report_page;
use App\slides_page;
//services_products model
use App\catalogue_services;
use App\services;
use App\services_content;
use App\catalogue_products;
use App\products;
use App\products_content;
//contact model
use App\contact_us;
use App\contact_page;



class main_pageController extends Controller
{
    public function index() {

       $main_page = main_page::all();
       $slidess = slides::all();
       $menus = menu::orderBy('id','desc')->first();
       $headers = header::orderBy('id','desc')->first();
       $content = content::orderBy('id','desc')->first();
       $about= about_us::orderBy('id','desc')->first();
       $sliders = sliders::all();
       $clients= our_client::all();
       $titles = Client_title::orderBy('id','desc')->first();
       $footers = footer::orderBy('id','desc')->first();
       $reports = report::all();
       $Slider_title= Slider_title::orderBy('id','desc')->first();
       $services = services::all();
       
        return view('home',compact('main_page','slidess','menus','headers','content','about','sliders','clients','footers','reports','Slider_title','titles' , 'services'));
    }

    public function about()
    {
      $headers = header::orderBy('id','desc')->first();
      $menus = menu::all();
      $footers = footer::orderBy('id','desc')->first();
      $abouts = about_us_page::orderBy('id','desc')->first(); 
      $contents = content_page::orderBy('id','desc')->first();
      $customers = customers:: all();
      $managers = manager:: all();
      $rports = report_page::all();
      $slids = slides_page:: all();
       $clients= our_client::all();
      
        return view('about',compact('headers','menus','footers','abouts','contents','customers','managers','rports','slids','clients'));
    }

    public function contact()
    {
     
    
      $headers = header::orderBy('id','desc')->first();
      $menus = menu::all();
      $footers = footer::orderBy('id','desc')->first();
      $contact = contact_page::orderBy('id','desc')->first(); 
      
      return view('contact',compact('headers','menus','footers','contact'));
      
    }

    public function contact_us(Request $request)
    {
     
      $contact_us = new contact_us ; 
      $contact_us->name = $request->name;
      $contact_us->email = $request->email;
      $contact_us->subject = $request->subject;
      $contact_us->message = $request->message;
        $contact_us->save(); 
        return back()->with('message', 'تم ارسال الرساله بانجاح ');
      
    }


    

    public function products()
    {
      
      $headers = header::orderBy('id','desc')->first();
      $menus = menu::all();
      $footers = footer::orderBy('id','desc')->first();
      $content = products_content::orderBy('id','desc')->first(); 
      $catalogue = catalogue_products:: all(); 
      $products = products::all();
      
      return view('products',compact('headers','menus','footers','content','catalogue','products'));

     }
    

    public function product_show($product)
    {
     //  $products = products::where('custom_url', $id)->get();
      $headers = header::orderBy('id','desc')->first();
      $menus = menu::all();
      $products = products::where('custom_url',$product)->first();
      $footers = footer::orderBy('id','desc')->first(); 
       
        return view('product', compact('products','headers','menus','footers'));
    }

    public function services()
    {
       $headers = header::orderBy('id','desc')->first();
      $menus = menu::all();
      $footers = footer::orderBy('id','desc')->first(); 
      $content = services_content::orderBy('id','desc')->first();
      $catalogue = catalogue_services::all();
      $services = services::all();
      
      return view('services',compact('headers','menus','footers','catalogue','services','content'));
    }


    public function service_show( $service)
    {
      $services = services::where('custom_url',$service)->first();
        $headers = header::orderBy('id','desc')->first();
      $menus = menu::all();
      
      $footers = footer::orderBy('id','desc')->first(); 

        return view('service', compact('services','headers','menus','services','footers'));
    }

    public function Servicesss($id)
    {
      $headers = Headers::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      $titlePage = services_titles::orderBy('id','desc')->first();
      $services = services::where('id',$services->id)->get();
      return view('sngil_service',compact('services','titlePage','headers','footers'));

    }




   

    








}
