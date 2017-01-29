<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Patient;
use App\Diagonosticprocedure;
class DiagonosticproceduresController extends Controller
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
        $appointments = $patient->appointments()->has('diagonosticprocedure')->get();
        return view('diagonosticprocedures.index')
        ->with(['appointments'=>$appointments]);
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
        return view('diagonosticprocedures.create')
        ->with(['appointment'=>$appointment, 'patient_id'=>$patient_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), ['procedure_note' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Diagonosticprocedure::create($data);

        return redirect()->to('/app_proc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagonosticprocedure = Diagonosticprocedure::where('appointment_id', $id)
        ->get()
        ->first();
        
        return view('diagonosticprocedures.show')
        ->with(['diagonosticprocedure'=>$diagonosticprocedure]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagonosticprocedure = Diagonosticprocedure::where('appointment_id', $id)
        ->get()
        ->first();
        return view('diagonosticprocedures.edit')
        ->with(['diagonosticprocedure'=>$diagonosticprocedure]);
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
        $diagonosticprocedure = Diagonosticprocedure::findOrFail($id);

        $validator = Validator::make($data = $request->all(), ['procedure_note' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $diagonosticprocedure->patient_id;

        $diagonosticprocedure->update($data);

        return redirect()->to('diagonosticprocedures?id='.$diagonosticprocedure->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Diagonosticprocedure::destroy($id);

        return redirect()->route('diagonosticprocedures.index');
    }
}
