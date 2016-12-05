<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

use App\Patient;
use App\Surgicalhistory;
class SurgicalhistoriesController extends Controller
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
        $surgicalhistories = $patient->surgicalhistories()->paginate(10);
        return view('surgicalhistories.index', compact('patient', 'surgicalhistories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patient_id = $request->input('id');
        return view('surgicalhistories.create', compact('patient_id'));
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
            'surgery_name' => 'required',
            'surgery_date' => 'date|required'
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        Surgicalhistory::create($data);
        return redirect()->to('surgicalhistories?id='.$data['patient_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surgicalhistory = Surgicalhistory::findOrFail($id);
        return view('surgicalhistories.show', compact('surgicalhistory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surgicalhistory = Surgicalhistory::find($id);
        return view('surgicalhistories.edit', compact('surgicalhistory'));
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
        $surgicalhistory = Surgicalhistory::findOrFail($id);

        $validator = Validator::make($data = $request->all(), array('surgery_name' => 'required', 'surgery_date' => 'date|required'));

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $surgicalhistory->patient_id;

        $surgicalhistory->update($data);

        return redirect()->to('surgicalhistories?id='.$surgicalhistory->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Surgicalhistory::destroy($id);
        return redirect()->route('surgicalhistories.index');
    }
}
