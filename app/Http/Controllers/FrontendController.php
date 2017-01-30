<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }
    public function about()
    {
    	return view('frontend.about');
    }
    public function services(){
    	//get some services
    	return view('frontend.services');
    }
    public function doctor(Request $request)
    {
    	//get some doctor
    	return view('frontend.doctor');
    }
    public function doctors(){
    	//get all doctors
    	return view('frontend.doctors');
    }
}
