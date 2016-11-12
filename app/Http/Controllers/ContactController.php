<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function index()
    {
     return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
    	$this->validate($request, [
                 'name'            =>  'required',
                 'email'    	   =>  'required',
                 'phoneno'         =>  'required|digits:10',
                 'subject'         =>  'required:min:3',
                 'message'         =>  'required|min:3|max:255'
            ]);
    	$contact = new Contact();
    	$contact->name = $request->input('name');
    	$contact->email = $request->input('email');
    	$contact->subject = $request->input('subject');
    	$contact->comment = $request->input('message');
    	$contact->save();
    }
    public function signOut()
    {
    	Auth::logout();
    	return redirect()->route('index');
    }
}
