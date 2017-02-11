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
Route::get('/',['as'=>'index','uses'=>'FrontendController@index']);
Route::get('about',['as'=>'about','uses'=>'FrontendController@about']);
Route::get('contact',['as'=>'contact','uses'=>'FrontendController@index']);
Route::get('services',['as'=>'services','uses'=>'FrontendController@services']);
Route::post('subscribe',['as'=>'subscribe','uses'=>'NewsLetterController@subscribe']); 
Route::post('contactsend',['as'=>'contactSend','uses'=>'ContactController@contactsend']);
Auth::routes();

//backend routes
Route::group(['prefix'=>'backend','middleware' => ['auth'], 'except'=>['AppointmentsController@store']],function(){
    Route::get('/',['as'=>'backend.index','uses'=>'HomeController@index']);
    Route::resource('profile','ProfileController');
    Route::get('pdf_test',['as'=>'backend.pdf_test','uses'=>'HomeController@pdf_test']);
	Route::get('message',['as'=>'backend.message','uses'=>'HomeController@message']);
	Route::get('logout',['as'=>'backend.logout','uses'=> 'HomeController@logout']);
	//****************************** Common Routes *******************************//

    Route::resource('users','UsersController');
    Route::resource('patients', 'PatientsController');
    Route::resource('surgicalhistories', 'SurgicalhistoriesController');

    Route::resource('familyhistories', 'FamilyhistoriesController');

    Route::resource('previousdiseases', 'PreviousdiseasesController');

    Route::resource('allergies', 'AllergiesController');

    Route::resource('drugusages', 'DrugusagesController');

    Route::resource('diagonosticprocedures', 'DiagonosticproceduresController');

    Route::resource('vitalsigns', 'VitalsignsController');

    Route::resource('labtests', 'LabtestsController');

    Route::resource('prescriptions', 'PrescriptionsController');

    Route::resource('medicines', 'MedicinesController');
    Route::resource('clinics', 'ClinicsController');

    // Medical Record Routes
    Route::get('search_pmr', ['as'=>'backend.search_pmr','uses'=>'HomeController@showSearchPMR']);
    Route::any('view_pmr', 'HomeController@showViewPMR');

    Route::resource('dutydays', 'DutydaysController');

    Route::resource('appointments', 'AppointmentsController');
    Route::get('patients_reporting', ['as'=>'backend.patients_reporting','uses'=>'PatientsController@patients_reporting']);

    Route::get('app_vitals',['as'=>'backend.app_vitals','uses'=>
        'HomeController@app_vitals']);

    Route::get('app_prescription',['as'=>'backend.app_prescription','uses'=>
        'HomeController@app_prescription']);

    Route::get('app_tests',['as'=>'backend.app_tests','uses'=>'HomeController@app_tests']);

    Route::get('app_proc',['as'=>'backend.app_proc','uses'=>'HomeController@app_proc']);

    Route::get('app_check_fee',['as'=>'backend.app_check_fee','uses'=>'HomeController@app_check_fee']);

    Route::get('app_test_fee',['as'=>'backend.app_test_fee','uses'=>'HomeController@app_test_fee']);

    Route::resource('checkupfees', 'CheckupfeesController');

    Route::resource('testfees', 'TestfeesController');

    // PDF Reports
    Route::any('print_pres', ['uses' => 'HomeController@print_pres']);  // Prescription PDF
    Route::any('print_test', ['uses' => 'HomeController@print_test']);  // Test Report PDF

    // Prints
    Route::get('app_pres_print',['as'=>'backend.app_pres_print','uses'=>'HomeController@app_pres_print']);

    Route::get('pres_print',['as'=>'backend.pres_print',
        'uses'=>'HomeController@pres_print']);

    Route::get('app_test_print',['as'=>'backend.app_test_print','uses'=>
        'HomeController@app_test_print']);

    Route::get('test_print',['as'=>'backend.test_print','uses'=>
        'HomeController@test_print']);

    Route::get('app_checkup_fee_print',['as'=>'backend.app_checkup_fee_print','uses'=>'HomeController@app_checkup_fee_print']);

    Route::get('checkup_invoice_print',['as'=>'backend.checkup_invoice_print',
        'uses'=>'HomeController@checkup_invoice_print']);

    Route::get('app_test_fee_print',['as'=>'backend.app_test_fee_print','uses'=>
        'HomeController@app_test_fee_print']);

    Route::get('test_invoice_print',['as'=>'backend.test_invoice_print','uses'=>
        'HomeController@test_invoice_print']); 

    Route::get('pdf_record',['as'=>'backend.pdf_record','uses'=>
        'HomeController@pdf_records']);

    Route::get('pdf', 'HomeController@pdf_record');

    Route::get('getSlots', 'TimeslotsController@getFreeSlots');
	
	//****************************************************************//

	//accountants routes
	Route::group(['prefix' => 'accountant'], function() {
	    //
	});
	//doctors routes
	Route::group(['prefix' => 'doctor'], function() {
	    //
	});
});