<?php

Auth::routes();
//admin raute
Route::get('adminpanel', 'adminController@indexss');

Route::get('users_show', 'adminController@show');

Route::get('users_show/{user}/delete', 'adminController@delete');

Route::get('edit/{user}/edit', 'adminController@edit');

Route::post('update/{user}/update', 'adminController@update')->name('update') ;

Route::get('users_show/{user}', 'adminController@show');

//change pages
Route::get('logo_show', 'adminController@show_logo');

Route::get('logo/{headers}/delete', 'adminController@logo_delete');

Route::get('logo_edit/{headers}', 'adminController@logo_edit');

Route::post('logo_edit/{headers}/update', 'adminController@logo_update')->name('headers') ;

Route::get('logo_show', 'adminController@show_logo');

Route::get('meta_edit/{headers}', 'adminController@meta_edit');

Route::post('meta_edit/{headers}', 'adminController@metasUpdate')->name('headers') ;

Route::get('logo_show', 'adminController@show_logo');

Route::get('slides_change', 'adminController@slides_show');

Route::get('slides_change/{slides}/delete', 'adminController@slide_delete');

Route::get('slidess/{slide}/edit', 'adminController@slides_edit');

Route::post('slides/{slide}/update', 'adminController@slide_update')->name('slides') ;

Route::post('slides_change', 'adminController@slides_add');

Route::get('slidess', 'adminController@slides_show');

Route::get('services_show', 'adminController@services_show');

Route::get('content/{content}/edit', 'adminController@services_edit');

Route::post('content/{content}/update', 'adminController@services_update')->name('contents') ; 

Route::get('services_show/{content}', 'adminController@services_show');

Route::get('about_change', 'adminController@about_show');

Route::post('about_show', 'adminController@about_update');

Route::get('about_show', 'adminController@about_show');

Route::get('packages_change', 'adminController@packages_show');

Route::get('packages_change/{sliders}/delete', 'adminController@packages_delete');

Route::get('title_edit/{title}/edit', 'adminController@servicesTitle_edit');

Route::post('title_update/{title}/update', 'adminController@servicesTitle_update')->name('title');

Route::post('packages_change', 'adminController@sliders_update');

Route::get('packages', 'adminController@packages_show');

Route::get('client_change', 'adminController@client_show');

Route::get('client_change/{client}/delete', 'adminController@client_delete');

Route::get('client_edit/{client}/edit', 'adminController@client_edit');

Route::post('client_update/{client}/update', 'adminController@client_update')->name('client');

Route::get('client_show', 'adminController@client_show');

Route::post('client_show/add', 'adminController@client_add');

Route::post('clients_show/add', 'adminController@title_add');

Route::get('reports_change', 'adminController@reports_show');

Route::get('reports_change/{report}/delete', 'adminController@reports_delete');

Route::get('reports_edit/{report}/edit', 'adminController@reports_edit');

Route::post('reports_change/{reports}/update', 'adminController@reports_update')->name('reports');

Route::post('reports_show/add', 'adminController@report_add');

Route::get('reports_show', 'adminController@reports_show');

Route::get('footer_change', 'adminController@footer_show');

Route::get('footer_change/{footer}/delete', 'adminController@footer_delete');

Route::get('footer_edit/{footer}/edit', 'adminController@footer_edit');

Route::post('footer_change/{footer}/update', 'adminController@footer_update')->name('footer');

Route::get('footer_show', 'adminController@footer_show');

Route::get('aboutUs_change', 'adminController@about_shows');

Route::get('aboutUs_change/{contents}/delete', 'adminController@aboutUs_delete');

Route::get('aboutUs_edit/{contents}/edit', 'adminController@aboutUs_edit');

Route::post('aboutUs_change/{contents}/update', 'adminController@aboutUs_update')->name('aboutUs');

Route::post('aboutus_show/add', 'adminController@aboutUs_add1');

Route::post('aboutUs_show/add', 'adminController@aboutUs_add2');

Route::get('aboutUs_show', 'adminController@about_shows');

Route::get('report_change', 'adminController@report_shows');

Route::get('report_change/{report}/delete', 'adminController@report_delete');

Route::get('report_edit/{report}/edit', 'adminController@report_edit');

Route::post('report_update/{report}/update', 'adminController@report_update')->name('report');

Route::post('report_show/add', 'adminController@report_addd');

Route::get('report_show', 'adminController@report_shows');

Route::get('maneger_change', 'adminController@manegers_show');

Route::get('maneger_change/{maneger}/delete', 'adminController@maneger_delete');

Route::get('maneger_edit/{maneger}/edit', 'adminController@maneger_edit');

Route::post('maneger_update/{maneger}/update', 'adminController@maneger_update')->name('maneger');

Route::post('maneger_show/add', 'adminController@maneger_add');

Route::get('maneger_show', 'adminController@manegers_show');

Route::get('customers_change', 'adminController@customers_show');

Route::get('customers_change/{customers}/delete', 'adminController@customers_delete');

Route::get('customers_edit/{customers}/edit', 'adminController@customer_edit');

Route::post('customers_update/{customers}/update', 'adminController@customers_update')->name('customers');

Route::post('customers_show/add', 'adminController@customers_add');

Route::get('customers_show', 'adminController@customers_show');

Route::get('contactdata_change', 'adminController@contact_shows');

Route::get('contactdata_change/{contact}/delete', 'adminController@contacted_delete');

Route::get('contactdata_edit/{contact}/edit', 'adminController@contacted_edit');

Route::post('contactdata_update/{contact}/update', 'adminController@contacted_update')->name('contact');

Route::post('contactdata/add', 'adminController@contactTitle_add');

Route::post('contactdata/add', 'adminController@contactData_add');

Route::get('contactdata_show', 'adminController@contact_shows');

Route::get('messages_show', 'adminController@messages_show');

Route::get('messages_shows/{contact}/delete', 'adminController@message_delete');

Route::get('messages_all/{contact}', 'adminController@messages_all');

Route::get('services_page', 'adminController@servicesPage_show');

Route::get('services_page/{servicesRequest}/delete', 'adminController@servicesPage_delete');

Route::get('services/{servicesRequest}/edit', 'adminController@servicesPage_edit');

Route::post('services/{servicesRequest}/update', 'adminController@servicesPage_update')->name('servicesRequest');

Route::post('services/add', 'adminController@servicesPage_add'); 

Route::get('services_page', 'adminController@servicesPage_show'); 

Route::get('products_page', 'adminController@productsPage_show');

Route::get('products_page/{products}/delete', 'adminController@productPage_delete');

Route::get('products/{products}/edit', 'adminController@productPage_edit');

Route::post('products/{products}/update', 'adminController@productPage_update')->name('products');

Route::post('products/add', 'adminController@productPage_add');

Route::get('products_page', 'adminController@productsPage_show'); 





//web site

Route::get('/', 'main_pageController@index');


Route::get('about', 'main_pageController@about');


Route::get('contact', 'main_pageController@contact');

Route::post('contactss', 'main_pageController@contact_us');

Route::get('services', 'main_pageController@services');


Route::get('products', 'main_pageController@products');


Route::get('service/{service}/show', 'main_pageController@service_show')->name('showService');



Route::get('product/{product}/show', 'main_pageController@product_show')->name('showProduct');





Route::get('/sliders', function () {
    return view('admin.sliders');
});

Route::get('/slides', function () {
    return view('admin.slides');
});

Route::get('/products_services', function () {
    return view('admin.services');
});

Route::get('/menu', function () {
    return view('admin.menu');
});


Route::get('/main', function () {
    return view('admin.main');
});











