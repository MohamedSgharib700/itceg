<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//home

use App\user; 
use App\header;
use App\SiteTitle;
use App\slides;
use App\content;
use App\about_us;
use App\Slider_title;
use App\sliders;
use App\our_client;
use App\Client_title;
use App\Http\Requests\clients;
use App\Http\Requests\TitleClientRequest;
use App\report;
use App\footer;
//about page
use App\about_us_page;
use App\content_page;
use App\report_page;
use App\manager;
use App\customers;
use App\contact_page;
use App\contact_us;
use App\services;
use App\Http\Requests\servicesRequest;
use App\products;
use App\Http\Requests\productsRequest;







class adminController extends Controller
{

	    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function indexss()
    {

    	return view('admin.home.index');
    }

    public function register(Request $request, user $register )
    {

      $register->name = $request->name;
      $register->email = $request->email;
      $register->password =  bcrypt($request['password']) ;

        $register->save();
        return back();
    }

    public function show()
    {
        $shows = user::all();

        return view('admin.homePage.users_show' , compact('shows'));
    }

    public function delete(user $user)
    {
       $user ->delete();
        return back();
    }

    public function edit(user $user)
    {
        return view('admin.homePage.user_edit', compact('user'));
    }

    public function update(Request $request , user $user)
    {

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password =  bcrypt($request['password']) ;

       $user ->update($request->all());
       return redirect('users_show');
    }

    //   *change pages*

   //    home page
    public function show_logo()
    {
        $headers = header::orderBy('id','desc')->first();
        return view('admin.homePage.logo_show',compact('headers'));
    }

    public function logo_edit(header $headers)
    {
        return view('admin.homePage.logo_edit', compact('headers'));
    }

    public function logo_update(Request $request , $headers)
    {
      $this->validate($request , ['change_img'=>'image']);
      $headers = header::where('id',$headers)->first();
      if ($request->hasFile('change_img')) {
        $imageName = time().'.'.$request->change_img->getClientOriginalName();
        $request->change_img->move(public_path('logos'), $imageName);
        $headers->logo = $imageName;
         }
        $headers->site_titles = $request->input('siteTitle') ;
        $headers->update();
       
        return redirect('logo_show');
    }

    public function meta_edit(header $headers)
    {
        return view('admin.homePage.meta_edit', compact('headers'));
    }

    public function metasUpdate(Request $request , $headers)
    {
      $headers = header::where('id',$headers)->first();
      $headers->metaTitles = $request->input('title') ;
      $headers->metaDescrabtions = $request->input('description') ;
      $headers->keyWords = $request->input('keywords') ;
         $headers->update();

         return redirect('logo_show');
    }

     public function logo_delete(header $headers)
    {
       $headers->delete();
        return back();
    }


    public function slides_show()
    {
       $slide = slides::all();
       return view('admin.homePage.slidess' , compact('slide'));
    }

     public function slide_delete(slides $slides)
    {
       $slides ->delete();
        return back();
    }

    public function slides_edit(slides $slide)
    {
        return view('admin.homePage.slides_edit', compact('slide'));
    }

    public function slides_add(Request $request , slides $slide)
    {
      $this->validate($request , ['slides_change'=>'image']);
         if ($request->hasFile('slides_change')) {
        $imageName = time().'.'.$request->slides_change->getClientOriginalName();
        $request->slides_change->move(public_path('slides'), $imageName);
        $slide->image = $imageName;
        }
        $slide->title = $request->input('title') ;
        $slide->content = $request->input('sup_title') ;
        $slide->save();

      
      $slide = slides::all();

       return view('admin.homePage.slidess' , compact('slide'));
    }

    public function slide_update(Request $request , slides $slide)
    {
      $this->validate($request , ['image'=>'image']);
         if ($request->hasFile('image')) {
          $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('slides'), $imageName);
        $slide->image = $imageName;
        }
        $slide->title = $request->input('title') ;
        $slide->content = $request->input('sub_title') ;
        $slide->save();


       return redirect('slidess');
    }

    public function services_show()
    {
        $content = content::orderBy('id','desc')->first();

        return view('admin.homePage.services_show' , compact('content'));
    }

    public function services_edit(content $content)
    {
        return view('admin.homePage.services_edit', compact('content'));
    }

    public function services_update(Request $request)
    {
      $content = new content;
        $content->title1 = $request->input('title1') ;
        $content->title2 = $request->input('title2') ;
        $content->title3 = $request->input('title3') ;
        $content->title4 = $request->input('title4') ;
        $content->content1 = $request->input('content1') ;
        $content->content2 = $request->input('content2') ;
        $content->content3 = $request->input('content3') ;
        $content->content4 = $request->input('content4') ;
                $content->save();
       return redirect('services_show');
    }

    public function about_show()
    {
      $about = about_us::orderBy('id','desc')->first();

      return view('admin.homePage.about_show' , compact('about'));
    }

    public function about_update(Request $request)
    {
      $about = new about_us;
        $about->title = $request->input('title') ;
        $about->sub_title = $request->input('sub_title') ;
        $about->content = $request->input('detils') ;

                $about->save();
       return redirect('about_show');
    }

   public function packages_show()
    {
      $title = Slider_title::orderBy('id','desc')->first();
      $sliders = sliders::all();

      return view('admin.homePage.packages_show' , compact('title','sliders'));
    }


     public function packages_delete(sliders $sliders)
    {
       $sliders ->delete();
        return back();
    }

     public function packages_edit(Slider_title $title)
    {
      return view('admin.homePage.packages_edit' , compact('title'));
    }

     public function packagesTitle_update(Request $request ,Slider_title $title  )
    {
        $title->title = $request->input('title') ;
        $title->sub_title = $request->input('sub_title') ;

         $title->save();
       return redirect('packages_show');
    }

    public function sliders_update(Request $request , sliders $sliders  )
    {
         if ($request->hasFile('slider_change')) {
        $imageName = time().'.'.$request->slider_change->getClientOriginalName();
        $request->slider_change->move(public_path('sliders'), $imageName);
        $sliders->slider_name = $imageName;
        $sliders->save();
      }
      $sliders = sliders::all();
      $title   = Slider_title::orderBy('id','desc')->first();

       return view('admin.homePage.packages_show' , compact('sliders','title'));
    }

    public function client_show()
    {
      $clients = our_client::all();
      $title = Client_title::orderBy('id','desc')->first();

      ;
       return view('admin.homePage.client_show' , compact('clients' ,'title' ));
    }

      public function client_delete(our_client $client)
    {
       $client ->delete();
        return back();
    }

    public function client_edit(our_client $client)
    {
      return view('admin.homePage.client_edit' , compact('client'));
    }

     public function client_update(Request $request , our_client $client)
    {
      $this->validate($request , ['image'=>'image']);
      if ($request->hasFile('image')) {
         $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('clientAdd'), $imageName);
        $client->image = $imageName;
        }
        $client->client1 = $request->input('name') ;
        $client->company_name1 = $request->input('company') ;
        $client->content1 = $request->input('detils') ;
        $client->save();
       return redirect('client_show');
    }

    public function client_add(clients $request)
    {
      $this->validate($request , ['image'=>'image']);

       $client = new our_client ;

       if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(public_path('clientAdd'), $imageName);
        $client->image = $imageName;
        }
      $client->client1 = $request->name;
      $client->company_name1 = $request->company_name;
      $client->content1 = $request->detils;

        $client->save();
        return back();
    }

    public function title_add(TitleClientRequest $request)
    {
       $title = new Client_title ;

      $title->title = $request->title;
      $title->sub_title = $request->sub_title;

        $title->save();
        return back();
    }

   public function reports_show(Request $request)
    {
       $reports = report::all();
        return view('admin.homePage.reports_show', compact('reports'));
    }

    public function reports_delete(report $report)
    {
      $report ->delete();
        return back();
    }

    public function reports_edit(report $report)
    {
      return view('admin.homePage.reports_edit' , compact('report'));
    }

     public function reports_update(Request $request , report $reports)
    {
        $this->validate($request , ['number'=>'numeric']);
        $reports->text = $request->input('title') ;
        $reports->sub_text = $request->input('sub_title') ;
        $reports->number = $request->input('number') ;


        $reports->save();
       return redirect('reports_show');
    }

    public function report_add(Request $request)
    {
       $reports = new report ;
      $this->validate($request , ['number'=>'numeric']);
        
      $reports->number = $request->number;
      $reports->text = $request->title;
      $reports->sub_text = $request->sub_title;

        $reports->save();
        return back();
    }

    public function footer_show(Request $request)
    {
       $footer = footer::orderBy('id','desc')->first();
        return view('admin.homePage.footer_show', compact('footer'));
    }

    public function footer_delete(footer $footer)
    {
      $footer ->delete();
        return back();
    }

    public function footer_edit(footer $footer)
    {
        return view('admin.homePage.footer_edit', compact('footer'));
    }



     public function footer_update(Request $request , footer $footer)
    {
       $this->validate($request , ['change_logo'=>'image']);
      if ($request->hasFile('change_logo')) {
				$logo = $request->file('change_logo');
        $imageName = time() .'_' .$logo->getClientOriginalName();
        $logo->move(public_path('logo_footer'), $imageName);
        $footer->logo = $imageName;
         }  
        $footer->link_name = $request->input('url_title') ;
        $footer->link_url = $request->input('url_linke') ;
        $footer->url_face = $request->input('url_face') ;
         $footer->url_twitter = $request->input('url_twitter') ;
        $footer->url_linkedin = $request->input('url_linkedin') ;
         $footer->copy_right = $request->input('copy_right') ;
        $footer->Connection = $request->input('phone') ;

        $footer->save();
      

        return redirect('footer_show');
    }

    
  // about page

   public function about_shows(Request $request)
    {
      $aboutss =about_us_page::orderBy('id','desc')->first(); 

      $contents =content_page::orderBy('id','desc')->first();

        return view('admin.about.aboutUs_show', compact('contents','aboutss'));
    }

    public function aboutUs_delete(content_page $contents)
    {
      $contents ->delete();
        return back();
    }

    public function aboutUs_edit(content_page $contents)
    {
        return view('admin.about.aboutUs_edit', compact('contents'));
    }

     public function aboutUs_update(Request $request , $contents)
    {
      $this->validate($request , ['images1'=>'image','images2'=>'image','images3'=>'image','images4'=>'image']);
       $contents = content_page::where('id',$contents)->first();
       

      if ($request->hasFile('images1')) {
        $file = $request->file('images1');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image1 = $imageName;
        }

         
      if ($request->hasFile('images2')) {
        $file = $request->file('images2');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image2 = $imageName;
        }

         
      if ($request->hasFile('images3')) {
        $file = $request->file('images3');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image3 = $imageName;
        }

         
      if ($request->hasFile('images4')) {
        $file = $request->file('images4');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image4 = $imageName;
        }

        $contents->title1 = $request->input('title1') ;
        $contents->title2 = $request->input('title2') ;
        $contents->content1 = $request->input('detils1') ;
        $contents->content2 = $request->input('detils2') ;
        $contents->content3 = $request->input('detils3') ;
        $contents->signing = $request->input('signing') ;

        $contents->update();

        return redirect('aboutUs_show');
    }

     public function aboutUs_add1(Request $request)
    {
       $aboutUs = new about_us_page ;

      $aboutUs->title = $request->title;
      $aboutUs->content = $request->sub_title;
  
        $aboutUs->save();
        return back();
    }

    public function aboutUs_add2(Request $request)
    {$this->validate($request , ['image1'=>'image','image2'=>'image','image3'=>'image','image4'=>'image']);
       $contents = new content_page ;
      if ($request->hasFile('image1')) {
        $file = $request->file('image1');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image1 = $imageName;
        }

         
      if ($request->hasFile('image2')) {
        $file = $request->file('image2');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image2 = $imageName;
        }

         
      if ($request->hasFile('image3')) {
        $file = $request->file('image3');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image3 = $imageName;
        }

         
      if ($request->hasFile('image4')) {
        $file = $request->file('image4');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('aboutImages'), $imageName);
        $contents->image4 = $imageName;
        }


      
      $contents->title1 = $request->input('title');
      $contents->title2 = $request->input('sub_title');
      $contents->content1 = $request->input('detils1');
      $contents->content2 = $request->input('detils2');
      $contents->content3 = $request->input('detils3');
      $contents->signing = $request->input('signing');
       
        $contents->save();
        return back();
    }

   

    public function report_shows(Request $request)
    {
      $report = report_page::all(); 

        return view('admin.about.report_show', compact('report'));
    }

    public function report_delete(report_page $report)
    {
      $report ->delete();
        return back();
    }

    public function report_edit(report_page $report)
    {
        return view('admin.about.report_edit', compact('report'));
    }

     public function report_update(Request $request , report_page $report)
    {
       $this->validate($request , ['count'=>'numeric']);
        $report->text1 = $request->input('title') ;
        $report->number1 = $request->input('count') ;
      
        $report->save();
        return redirect('report_show');
    }

    public function report_addd(Request $request)
    {
       $report = new report_page ;
      $this->validate($request , ['number'=>'numeric']);
      $report->text1 = $request->title;
      $report->number1 = $request->number;

        $report->save();
        return back();
    }

    public function manegers_show(Request $request)
    {
      $managers = manager:: all();

        return view('admin.about.manegers_show', compact('managers'));
    }

    public function maneger_delete(manager $maneger)
    {
      $maneger ->delete();
        return back();
    }

    public function maneger_edit(manager $maneger)
    {
        return view('admin.about.maneger_edit', compact('maneger'));
    }

    public function maneger_update(Request $request , manager $maneger)
    {
  
        $maneger->manager = $request->input('name') ;
        $maneger->specialty = $request->input('specialty') ;
        $maneger->url_face = $request->input('facebook') ;
        $maneger->url_twitter = $request->input('twitter') ;
        $maneger->url_linkedin = $request->input('linkedin') ;
      
        $maneger->save();
        return redirect('maneger_show');
    }

    public function maneger_add(Request $request)
    {
       $maneger = new manager ;

      $maneger->manager = $request->name;
      $maneger->specialty = $request->specialty;
      $maneger->url_face = $request->url_face;
      $maneger->url_twitter = $request->url_twitter;
      $maneger->url_linkedin = $request->url_linkedin;
  

        $maneger->save();
        return back();
    }

    public function customers_show(Request $request)
    {
       $customers = customers:: all();

        return view('admin.about.customers_show', compact('customers'));
    }

    public function customers_delete(customers $customers)
    {
      $customers ->delete();
        return back();
    }

    public function customer_edit(customers $customers)
    {
        return view('admin.about.customers_edit', compact('customers'));
    }

    public function customers_update(Request $request , customers $customers)
    {
       $this->validate($request , ['image_change'=>'image']);
      if ($request->hasFile('image_change')) {
        $imageName = time().'.'.$request->image_change->getClientOriginalName();
        $request->image_change->move(public_path('customer_logos'), $imageName);
        $customers->image = $imageName;
        $customers->save();
         }
         
       return redirect('customers_show');
  }

    public function customers_add(Request $request , customers $customers)
    {
      $this->validate($request , ['customer_logo'=>'image']);
      if ($request->hasFile('customer_logo')) {
        $imageName = time().'.'.$request->customer_logo->getClientOriginalName();
        $request->customer_logo->move(public_path('customer_logos'), $imageName);
        $customers->image = $imageName;
        $customers->save();
         return back();
    }
  }

    public function contact_shows(Request $request)
    {
       $contact = contact_page::orderBy('id','desc')->first(); 

        return view('admin.about.contactdata_show', compact('contact'));
    }

     public function contacted_delete(contact_page $contact)
    {
      $contact ->delete();
        return back();
    }

    public function contacted_edit(contact_page $contact)
    {
        return view('admin.about.contactdata_edit', compact('contact'));
    }

      public function contacted_update(Request $request , contact_page $contact)
    {
  
        $contact->title2 = $request->input('sity1') ;
        $contact->address1 = $request->input('address1') ;
        $contact->phone1 = $request->input('phone1') ;
        $contact->email1 = $request->input('email1') ;
        $contact->url1 = $request->input('url1') ;
        $contact->title3 = $request->input('sity2') ;
        $contact->address2 = $request->input('address2') ;
        $contact->phone2 = $request->input('phone2') ;
        $contact->email2 = $request->input('email2') ;
        $contact->url2 = $request->input('url2') ;
        $contact->title4 = $request->input('title3') ;

        
        $contact->save();
        return redirect('contactdata_show');
    }


    public function contactData_add(Request $request, contact_page $contact)
    {
       $contact->title1 = $request->title;
      $contact->content = $request->sub_title;
      $contact->title2 = $request->sity1;
      $contact->address1 = $request->address1;
      $contact->phone1 = $request->phone1;
      $contact->email1 = $request->email1;
      $contact->url1 = $request->url1;
       $contact->title3 = $request->sity2;
      $contact->address2 = $request->address2;
      $contact->phone2 = $request->phone2;
      $contact->email2 = $request->email2;
      $contact->url2 = $request->url2;
      $contact->title4 = $request->title3;
  

        $contact->save();
        return back();
    }

    public function messages_show()
    {
       $contact = contact_us::all();
       return view('admin.about.messge_show' , compact('contact'));
    }

     public function message_delete(contact_us $contact)
    {
      $contact ->delete();
        return back();
    }

    public function messages_all( contact_us $contact )
    {
      //$contact = contact_us::pluck('message');
       return view('admin.about.message_all' , compact('contact'));
    }

     public function servicesPage_show()
    {
        $servicesRequest = services::all();
        $title = Slider_title::orderBy('id','desc')->first();
       return view('admin.products_services.services_page' , compact('servicesRequest' , 'title'));
    }

     public function servicesPage_delete(services  $servicesRequest)
    {
       $servicesRequest ->delete();
        return back();
    }

    public function servicesPage_edit(services $servicesRequest)
    {
        return view('admin.products_services.services_page_edit', compact('servicesRequest'));
    }

     public function servicesTitle_edit(Slider_title $title)
    {
      return view('admin.products_services.packages_edit' , compact('title'));
    }

     public function servicesTitle_update(Request $request ,Slider_title $title  )
    {
        $title->title = $request->input('title') ;
        $title->sub_title = $request->input('sub_title') ;

         $title->save();
       return redirect('services_page');
    }


     public function servicesPage_update(Request $request ,  $servicesRequest)
    {
      $servicesRequest =  services::where('id',$servicesRequest)->first();
      $this->validate($request , ['image'=>'image']);
      if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(public_path('servicesAdd'), $imageName);
        $servicesRequest->image = $imageName;
          
        }  
       $servicesRequest->title = $request->input('name') ;
        $servicesRequest->sub_title = $request->input('sub_name') ;
        $servicesRequest->catalogue_id = $request->input('foran_key') ;
        $servicesRequest->detils = $request->input('detils') ;
        $servicesRequest->custom_url = $request->input('urlTitle') ;
        
        $servicesRequest->update();
       
        return redirect('services_page');
    }

     public function servicesPage_add(Request $request, services $servicesRequest)
    {
      $this->validate($request , ['image'=>'image']);
     if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('servicesAdd'), $imageName);
        $servicesRequest->image = $imageName;
        $servicesRequest->title = $request->input('name') ;
        $servicesRequest->sub_title = $request->input('sub_name') ;
        $servicesRequest->catalogue_id = $request->input('foran_key') ;
        $servicesRequest->detils = $request->input('detils') ;
        $servicesRequest->custom_url = $request->input('url_Title') ;
        $servicesRequest->save();
      }else{

        $servicesRequest->title = $request->input('name') ;
        $servicesRequest->sub_title = $request->input('sub_name') ;
        $servicesRequest->catalogue_id = $request->input('foran_key') ;
        $servicesRequest->detils = $request->input('detils') ;
        $servicesRequest->custom_url = $request->input('url_Title') ;
        $servicesRequest->save();

      }
        
         return redirect('services_page');
    }


     public function productsPage_show()
    {
        $products = products::all();
       return view('admin.products_services.products_page' , compact('products'));
    }

     public function productPage_delete(products  $products)
    {
       $products ->delete();
        return back();
    }

    public function productPage_edit(products $products)
    {

        return view('admin.products_services.products_page_edit', compact('products'));
    }

     public function productPage_update(Request $request , $product)
    {
       $product =  products::where('id',$product)->first();
      $this->validate($request , ['image'=>'image']);
      if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(public_path('productsAdd'), $imageName);
        $product->image = $imageName; 
          }
        $product->title = $request->input('name') ;
        $product->sub_title = $request->input('sub_name') ;
        $product->catalogue_id = $request->input('foran_key') ;
        $product->detils = $request->input('detil') ;
        $product->custom_url = $request->input('urlTitle') ;
        
        $product->update();

       
        return redirect('products_page');
    }

     public function productPage_add(Request $request, products $products)
    {
       $this->validate($request , ['image_add'=>'image']);
     if ($request->hasFile('image_add')) {
        $file = $request->file('image_add');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('productsAdd'), $imageName);
        $products->image = $imageName;
        $products->title = $request->input('name') ;
        $products->sub_title = $request->input('sub_name') ;
        $products->catalogue_id = $request->input('foran_key') ;
        $products->detils = $request->input('detils') ;
         $products->custom_url = $request->input('url_Title') ;
        $products->save();
      }else{

        $products->title = $request->input('name') ;
        $products->sub_title = $request->input('sub_name') ;
        $products->catalogue_id = $request->input('foran_key') ;
        $products->detils = $request->input('detils') ;
        $products->custom_url = $request->input('url_Title') ;
        $products->save();

      }
        
         return redirect('products_page');
    }


    



  }





   











