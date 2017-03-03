<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Mail;
use URL;
use App\Hospital;
use App\District;
use App\User;

class HospitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('dashboard.hospitals.index')->with(['hospitals'=>$hospitals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        return view('dashboard.hospitals.create')->with(['districts'=>$districts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'           => 'required',
        'location'       => 'required|exists:districts,district_name',
        'quota'          => 'required|numeric'
        ]);
        if($request->has('activate')){
        $activate = 1;
        }
        else
        {
        $activate= 0;   
        }
        Hospital::create([
            'name'          => $request->input('name'),
            'location'      => $request->input('location'),
            'quota_per_day' => $request->input('quota'),
            'is_activated'  => $activate,
            ]);
        return redirect()->route('hospitals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospital = Hospital::find($id);
        return view('dashboard.hospitals.show')->with(['hospital'=>$hospital]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);
        $districts = District::all();
        return view('dashboard.hospitals.edit')->with(['hospital'=>$hospital,'districts'=> $districts]);
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
        $clinic = Hospital::findOrFail($id);
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
        Hospital::destroy($id);
        return redirect()->route('dashboard.hospitals.index');
    }
}
