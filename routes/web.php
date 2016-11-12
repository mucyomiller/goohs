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
Route::post('contactsend',['as'=>'contactSend','uses'=>'ContactController@contactsend']);
Auth::routes();

Route::get('/home', 'HomeController@index');

//Admin routes
Route::group(['prefix'=>'backend','middleware' => ['auth']],function(){
Route::get('index',['as'=>'backend.index','uses'=> function () {
    return view('dashboard.index');
}]);
route::get('logout',['as'=>'backend.logout','uses'=> function(){
Auth::logout();
return redirect('/');
}]);
});