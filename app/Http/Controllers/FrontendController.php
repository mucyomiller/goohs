<?php

namespace App\Http\Controllers;
use View;
use App\Hospital;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct(){
        //i will add chaching mechanism
        $hospitals = Hospital::all();
        //sharing all hospitals to Frontend routes
        View::share('hospitals', $hospitals);
    }
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
    public function contact(){
        return view('frontend.contact');
    }
}
