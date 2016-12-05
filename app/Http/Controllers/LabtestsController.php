<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Appointment;
use App\Labtest;
class LabtestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $appointment = Appointment::find($request->input('id'));
        $labtests = $appointment->labtests()->paginate(10);

        if($request->input('flag') != null){
            if($request->input('flag') == 'print'){
                $flag = $request->input('flag');
                return view('labtests.index')
                ->with(['appointment'=>$appointment, 'flag'=>$flag, 'labtests'=>$labtests]);
            }else{
                $flag = $request->input('flag');
                return view('labtests.index')
                ->with(['appointment'=>$appointment, 'flag'=>$flag, 'labtests'=>$labtests]);
            }
        }
        return view('labtests.index')
        ->with(['appointment'=>$appointment, 'labtests'=>$labtests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $appointment = Appointment::find($request->input('id'));
        return view('labtests.create')
        ->with(['appointment'=>$appointment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->input(),
         [
         'test_name' => 'required'
         ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        Labtest::create($data);

        return redirect()->to('labtests?id='.$data['appointment_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $labtest = Labtest::findOrFail($id);
        
        if($request->input('flag') != null){
            $flag = $request->input('flag');
            return view('labtests.show')
            ->with(['labtest'=>$labtest, 'flag'=>$flag]);
        }

        return view('labtests.show')
        ->with(['labtest'=>$labtest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labtest = Labtest::find($id);
        
        if($request->input('flag') != null){
            $flag = $request->input('flag');
            return view('labtests.edit')
            ->with(['labtest'=>$labtest, 'flag'=>$flag]);
        }
        
        return view('labtests.edit')
        ->with(['labtest'=>$labtest]);
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
        
        $labtest = Labtest::findOrFail($id);
        $data = Input::all();
        if($request->input('flag') != null){
            $data['test_name'] = $labtest->test_name;
            $data['test_results'] = $labtest->test_results;
        }

        if(Auth::user()->role == 'Lab Manager'){
            $data['test_name'] = $labtest->test_name;
        }

        $validator = Validator::make($data, ['test_name' => 'required']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $labtest->patient_id;
        $labtest->update($data);
        
        if($request->input('flag') != null){
            $flag = $request->input('flag');
            return redirect()->to('labtests?id='.$data['appointment_id']. '&flag='. $flag);
        }

        return redirect()->to('labtests?id='.$data['appointment_id']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Labtest::destroy($id);
        return redirect()->route('labtests.index');
    }
}
