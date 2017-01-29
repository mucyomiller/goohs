<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/user', function (Request $request) {
//     return 
//     App\User::all();
// });
//middleware('auth:api');
Route::get('/appointments', function (Request $request) {
    return 
    App\Appointment::all();
});
Route::get('/appointments/{id}', function (Request $request,$id) {
    return App\Appointment::where('id',$id)->first();
});

