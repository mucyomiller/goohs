<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Previousdisease;
use App\Patient;
class PreviousdiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_id = $request->input('id');
        $patient = Patient::find($patient_id);
        $previousdiseases = $patient->previousdiseases()->paginate(1);
        return view('previousdiseases.index')
        ->with(['patient'=>$patient, 'previousdiseases'=>$previousdiseases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $patient_id = $request->input('id');
        return view('previousdiseases.create')->with(['patient_id'=>$patient_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), ['disease_name' => 'required']);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data['clinic_id'] = Auth::user()->clinic_id;
        Previousdisease::create($data);
        return redirect()->to('previousdiseases?id='.$data['patient_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $previousdisease = Previousdisease::findOrFail($id);
        return view('previousdiseases.show', compact('previousdisease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $previousdisease = Previousdisease::find($id);
        return view('previousdiseases.edit', compact('previousdisease'));
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
        $previousdisease = Previousdisease::findOrFail($id);

        $validator = Validator::make($data = $request->all(), ['disease_name' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data['patient_id'] = $previousdisease->patient_id;

        $previousdisease->update($data);

        return redirect()->to('previousdiseases?id='.$previousdisease->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Previousdisease::destroy($id);
        return redirect()->route('previousdiseases.index');
    }
}
