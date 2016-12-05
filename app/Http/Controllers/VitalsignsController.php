<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Appointment;
use App\Patient;
use App\Vitalsign;
class VitalsignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patient_id = $request->input('id');
        $patient = Patient::find($patient_id);
        $appointments = $patient->appointments()->has('vitalsign')->paginate(1);

        return view('vitalsigns.index', compact('appointments', 'patient_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointment = Appointment::findOrFail($request->input('id'));
        return view('vitalsigns.create', compact('appointment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), Vitalsign::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        Vitalsign::create($data);

        return redirect()->to('/app_vitals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vitalsign = Vitalsign::where('appointment_id', $id)->get()->first();
        return view('vitalsigns.show', compact('vitalsign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vitalsign = Vitalsign::where('appointment_id', $id)->get()->first();
        return view('vitalsigns.edit', compact('vitalsign'));
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
        $vitalsign = Vitalsign::findOrFail($id);

        $validator = Validator::make($data = $request->all(), Vitalsign::$rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $vitalsign->patient_id;

        $vitalsign->update($data);
        return redirect()->to('vitalsigns?id='.$vitalsign->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vitalsign::destroy($id);
        return redirect()->route('vitalsigns.index');
    }
}
