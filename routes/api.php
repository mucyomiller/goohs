<?php

use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\Sector;
use App\Cell;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('provinces',function(){
		$provinces = Province::all();
		return response()->json($provinces);
});
Route::get('districts/{province_id}', function($id){
		$districts = District::where('province_id',$id)->get();
		return response()->json($districts);
})->where('province_id', '[1-5]+');

Route::get('sectors/{district_id}', function($id){
		$sectors = Sector::where('district_id',$id)->get();
		return response()->json($sectors);
})->where('district_id', '[0-9]+');
Route::get('appointments',['uses'=>'SchedulesController@appointments']);

