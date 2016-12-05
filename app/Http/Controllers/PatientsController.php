<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Patient;
class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::where('clinic_id', Auth::user()->clinic_id)->paginate(10);
        return view('patients.index')
        ->with(['patients'=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = Input::all(), 
            [
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'city' => 'required',
            'country' => 'required',
            'address' => 'required'
            ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $patient = new Patient();
        $patient->name = $request->input('name');
        $patient->dob = $request->input('dob');
        if($request->has('email')){
            $patient->email = $request->input('email');
        }else{
            $patient->email = 'N/A';
        }
        $patient->gender = $request->input('gender');
        $patient->age = $request->input('age');
        $patient->city = $request->input('city');
        $patient->country = $request->input('country');
        $patient->address = $request->input('address');

        if($request->input('phone') == ''){
            $patient->phone = 'N/A';
        }else {
            $patient->phone = $request->input('phone');
        }

        if($request->input('cnic') == ''){
            $patient->cnic = 'N/A';
        }else {
            $patient->cnic = $request->input('cnic');
        }

        if($request->input('note') == ''){
            $patient->note = 'N/A';
        }else {
            $patient->note = $request->input('note');
        }
        $patient->save();
        $patient->patient_id = "P0" . $patient->id;
        $patient->clinic_id = Auth::user()->clinic_id;
        $patient->save();

        if($request->has('email')){
            $data = ['name' => $request->input('name')];
            Mail::queue('emails.patient_welcome', $data, function($message)
            {
                $message->to($request->input('email'), $request->input('name'))->subject('Welcome to GOOHS!');
            });
        }

        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show')
        ->with(['patient'=>$patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $patient = Patient::find($id);
        return view('patients.edit')
        ->with(['patient'=>$patient]);
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
        $patient = Patient::findOrFail($id);
        $validator = Validator::make($data = $request->all(), 
            [
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'city' => 'required',
            'country' => 'required',
            'address' => 'required'
            ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $patient->update($data);
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::destroy($id);
        return redirect()->route('patients.index');
    }

    public function patients_reporting(){
        $appointments = Appointment::where('clinic_id', Auth::user()->clinic_id)->where('status', 5)->paginate(1);
        return view('patients.checked_patients')
        ->with(['appointments'=>$appointments]);
    }
}
