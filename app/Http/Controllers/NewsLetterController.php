<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetter;
use Session;
//use Redirect;
class NewsLetterController extends Controller
{
   public function subscribe(Request $request)
   {
   	$this->validate($request, [
                 'name'            =>  'required',
                 'email'    	   =>  'required|email',
            ]);
   	 $sub = new NewsLetter();
   	 $sub->name = $request->input('name');
   	 $sub->email = $request->input('email');
   	 $sub->save();
   	 Session::flash('message', "You have been successfuly subscribed to our NewsLetter");
   	 return redirect()->back();
   }
   public function unsubscribe(Request $request)
   {
   	//unsubscribe codes will go here.
   }
}
