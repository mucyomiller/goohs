<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['as'=>'index','uses'=> function () {
    return view('frontend.index');
}]);
Route::get('about',['as'=>'about','uses'=> function () {
    return view('frontend.about');
}]);
Route::get('contact',['as'=>'contact','uses'=>'ContactController@index']);
Route::post('subscribe',['as'=>'subscribe','uses'=>'NewsLetterController@subscribe']); 
Route::post('contactsend',['as'=>'contactSend','uses'=>'ContactController@contactsend']);
Auth::routes();

Route::get('/home', 'HomeController@index');

//Admin routes
Route::group(['prefix'=>'backend','middleware' => ['auth']],function(){
Route::get('/',['as'=>'backend.index','uses'=> function () {return view('dashboard.index');}]);
Route::get('message',['as'=>'backend.message','uses'=> function () {return view('dashboard.message');}]);
Route::get('appointments',
	['as'=>'backend.appointments','uses'=> function () {return view('dashboard.appointments');}]);
Route::get('sent',['as'=>'backend.sent','uses'=> function () {return view('dashboard.sent');}]);
Route::get('logout',['as'=>'backend.logout','uses'=> function(){
Auth::logout();
return redirect('/');
}]);
});