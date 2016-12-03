<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Patient;
use App\Checkupfee;
use App\Appointment;
class CheckupfeesController extends Controller
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
        $appointments = $patient->appointments()->has('checkupfee')->paginate(10);
        return view('checkupfees.index')->with(['appointments'=>$appointments, 'patient'=>$patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $appointment = Appointment::find($request->input('id'));
        $patient_id = $appointment->patient->id;
        
        return view('checkupfees.create')->with(['appointment'=>$appointment, 'patient_id'=>$patient_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['checkup_fee' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        Checkupfee::create($data);
        return redirect()->to('/app_check_fee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $checkupfee = Checkupfee::where('appointment_id', $id)->get()->first();

        if($request->input('flag') != null){
            $flag = $request->input('flag');
            if($flag == 'checkup_invoice'){
                return view('checkupfees.show')->with(['checkupfee', 'flag']);
            }
        }
        
        return view('checkupfees.show')->with(['checkupfee'=>$checkupfee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkupfee = Checkupfee::where('appointment_id', $id)->get()->first();

        return view('checkupfees.edit')->with(['checkupfee'=>$checkupfee]);   
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
        $checkupfee = Checkupfee::findOrFail($id);

        $validator = Validator::make($data = $request->all(), ['checkup_fee' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $checkupfee->patient_id;

        $checkupfee->update($data);

        if(Auth::user()->role == 'Accountant'){
            return redirect()->to('/app_check_fee');
        }

        return redirect()->to('checkupfees?id='.$checkupfee->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Checkupfee::destroy($id);

        return redirect()->route('checkupfees.index');
    }
}
