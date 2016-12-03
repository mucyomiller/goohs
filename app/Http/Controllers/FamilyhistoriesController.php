<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\Familyhistory;

class FamilyhistoriesController extends Controller
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
        $familyhistories = $patient->familyhistories()->paginate(10);

        return view('familyhistories.index')
        ->with(['patient'=>$patient, 'familyhistories'=>$familyhistories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient_id = $request->input('id');
        return view('familyhistories.create')->with(['patient_id'=>$patient_id]);
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
            'f_member_name'         => 'required', 
            'patient_relation'      => 'required', 
            'gender'                => 'required', 
            'age'                   => 'required'
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data['clinic_id'] = Auth::user()->clinic_id;

        Familyhistory::create($data);

        return redirect()->to('familyhistories?id='.$data['patient_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familyhistory = Familyhistory::findOrFail($id);
        return view('familyhistories.show')->with(['familyhistory'=>$familyhistory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $familyhistory = Familyhistory::find($id);
        return view('familyhistories.edit')->with(['familyhistory'=>$familyhistory]);
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
        $familyhistory = Familyhistory::findOrFail($id);

        $data = $request->all();
        $validator = Validator::make($data, 
            [
            'f_member_name' => 'required', 
            'patient_relation' => 'required', 
            'gender' => 'required', 
            'age' => 'required'
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $familyhistory->patient_id;

        $familyhistory->update($data);

        return redirect()->to('familyhistories?id='.$familyhistory->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Familyhistory::destroy($id);
        return redirect()->route('familyhistories.index');
    }
}
