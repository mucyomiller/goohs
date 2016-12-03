<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Patient;
use App\Drugusage;
class DrugusagesController extends Controller
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
        $drugusages = $patient->drugusages()->paginate(1);
        return View::make('drugusages.index')
        ->with(['patient'=>$patient, 'drugusages'=>$drugusages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patient_id = $request->input('id');
        return view('drugusages.create')->with(['patient_id'=>$patient_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), ['drug_name' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        Drugusage::create($data);

        return redirect()->to('drugusages?id='.$data['patient_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drugusage = Drugusage::findOrFail($id);
        return view('drugusages.show')->with(['drugusage'=>$drugusage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drugusage = Drugusage::find($id);

        return view('drugusages.edit')->with(['drugusage'=>$drugusage]);
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
        $drugusage = Drugusage::findOrFail($id);

        $validator = Validator::make($data = $request->all(), ['drug_name' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $drugusage->patient_id;

        $drugusage->update($data);

        return redirect()->to('drugusages?id='.$drugusage->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Drugusage::destroy($id);

        return redirect()->route('drugusages.index');
    }
}
