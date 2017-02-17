<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Mail;
use App\Patient;
use App\Appointment;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient = Patient::where('id', $request->user()->id)->first();
        return view('dashboard.patients.index')
        ->with(['patients'=>$patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), 
            [
            'fathername' => 'required|',
            'mothername' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'district_id' => 'required|numeric|min:1|max:30',
            'sector_id' => 'required|numeric|min:1|max:416',
            'cell' => 'required',
            ]);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $patient = new Patient();
        $patient->user_id  = $request->user()->id;
        $patient->fathername = $request->input('fathername');
        $patient->mothername = $request->input('mothername');
        $patient->gender = $request->input('gender');
        $patient->dob = $request->input('dob');
        $patient->district_id = $request->input('district_id');
        $patient->sector_id = $request->input('sector_id');
        $patient->cell_id = $request->input('cell');
        $patient->patientID = "1";
        $patient->save();
        $patient->patientID = "1".date('Ymd'). $patient->id;
        $patient->save();
        //send email here
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
        return view('dashboard.patients.show')
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
        return view('dashboard.patients.edit')
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
        return view('dashboard.patients.checked_patients')
        ->with(['appointments'=>$appointments]);
    }
}
