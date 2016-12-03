<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Allergy;
class AllergiesController extends Controller
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
        $allergies = $patient->allergies()->paginate(10);

        return view('allergies.index')->with(['allergies'=>$allergies, 'patient'=>$patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patient_id = $request->input('id');
        return view('allergies.create')->with(['patient_id'=>$patient_id]);
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
            'allergy_name' => 'required'
            ]);
        $data = $request->all();
        $data['clinic_id'] = Auth::user()->clinic_id;
        Allergy::create($data);

        return redirect()->to('allergies?id='.$data['patient_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allergy = Allergy::findOrFail($id);

        return view('allergies.show')->with(['allergy'=>$allergy]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allergy = Allergy::find($id);

        return view('allergies.edit')->with(['allergy'=>$allergy]);
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
        
        $allergy = Allergy::findOrFail($id);

        $this->validate($request,
            [
            'allergy_name' => 'required'
            ]);
        $data = $request->all();
        $data['patient_id'] = $allergy->patient_id;

        $allergy->update($data);

        return redirect()->to('allergies?id='.$allergy->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Allergy::destroy($id);

        return redirect()->route('allergies.index');
    }
}
