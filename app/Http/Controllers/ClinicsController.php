<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Mail;
use URL;
use App\Clinic;
use App\User;
class ClinicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinics = Clinic::paginate(10);
        return view('clinics.index')->with(['clinics'=>$clinics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, 
            [
                'password'          => 'min:6',
                'email'             => 'unique:Users',
                'status'            => 'required',
                'clinic_name'       => 'required',
                'clinic_address'    => 'required'
               ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $clinic = Clinic::create(['name' => $data['clinic_name'], 'address' => $data['clinic_address']]);

        $User = new User();
        $User->clinic_id = $clinic->id;
        $User->name = $request->input('name');
        $User->password = Hash::make($request->input('password'));
        $User->email = $request->input('email');
        $User->gender = $request->input('gender');
        $User->age = $request->input('age');
        $User->city = $request->input('city');
        $User->country = $request->input('country');
        $User->address = $request->input('address');

        if($request->input('phone') == ''){
            $User->phone = 'N/A';
        }else {
            $User->phone = $request->input('phone');
        }

        if($request->input('cnic') == ''){
            $User->cnic = 'N/A';
        }else {
            $User->cnic = $request->input('cnic');
        }

        if($request->input('branch') == ''){
            $User->branch = 'N/A';
        }else {
            $User->branch = $request->input('branch');
        }

        if($request->input('note') == ''){
            $User->note = 'N/A';
        }else {
            $User->note = $request->input('note');
        }

        $User->status = $request->input('status');
        $User->role = 'Administrator';
        $User->save();

        $data = ['link' => URL::to('login'), 'name' => $request->input('name')];
//      Send email to User
        Mail::queue('emails.welcome', $data, function($message)
        {
        $message->to($request->input('email'), $request->input('name'))->subject('Welcome to EMR!');
        });

        return redirect()->route('clinics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinic = Clinic::find($id);
        $admin = User::where('role', 'Administrator')->where('clinic_id', $clinic->id)->first();
        return view('clinics.show')->with(['clinic'=>$clinic, 'admin'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinic = Clinic::find($id);
        $admin = User::where('role', 'Administrator')->where('clinic_id', $clinic->id)->first();
        return view('clinics.edit')->with(['clinic'=>$clinic, 'admin'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $clinic = Clinic::findOrFail($id);
        $admin = User::where('role', 'Administrator')->where('clinic_id', $clinic->id)->first();

        if ($data['email'] !== $admin->email) {
            $validator = Validator::make($data, ['email' => 'unique:users']);

            if ($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }

        }

        $clinic->update(['name' => $data['clinic_name'], 'address' => $data['clinic_address']]);

        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->gender = $request->input('gender');
        $admin->age = $request->input('age');
        $admin->city = $request->input('city');
        $admin->country = $request->input('country');
        $admin->address = $request->input('address');

        if($request->input('phone') == ''){
            $admin->phone = 'N/A';
        }else {
            $admin->phone = $request->input('phone');
        }

        if($request->input('cnic') == ''){
            $admin->cnic = 'N/A';
        }else {
            $admin->cnic = $request->input('cnic');
        }

        if($request->input('branch') == ''){
            $admin->branch = 'N/A';
        }else {
            $admin->branch = $request->input('branch');
        }

        if($request->input('note') == ''){
            $admin->note = 'N/A';
        }else {
            $admin->note = $request->input('note');
        }

        $admin->status = $request->input('status');
        $admin->update();

        return redirect()->route('clinics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clinic::destroy($id);
        return redirect()->route('clinics.index');
    }
}
