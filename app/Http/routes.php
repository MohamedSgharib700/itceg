<?php



Route::group(['middleware' => 'admin'], function() {

	 Route::get('/adminpanel', 'adminController@indexs');

	});


Route::get('/adminpanel', 'adminController@index');


Route::group(['middleware' => 'web'], function() {

	Route::auth();
	Route::get('/', function() {
	    return view('home') ;	
	});

	Route::get('/home', 'HomeController@index');
});