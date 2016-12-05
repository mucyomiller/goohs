<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Timeslot;
class TimeslotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeslots = Timeslot::where('clinic_id', Auth::user()->clinic_id)->get();
        return view('timeslots.index', compact('timeslots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('timeslots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = Input::all(), [/* 'title' => 'required' */]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        Timeslot::create($data);

        return redirect()->route('timeslots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $timeslot = Timeslot::findOrFail($id);
        return view('timeslots.show', compact('timeslot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timeslot = Timeslot::find($id);
        return view('timeslots.edit', compact('timeslot'));
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
        $timeslot = Timeslot::findOrFail($id);

        $validator = Validator::make($data = Input::all(), [/* 'title' => 'required' */]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $timeslot->update($data);
        return redirect()->route('timeslots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Timeslot::destroy($id);
        return redirect()->route('timeslots.index');
    }

      //    Return Free slots to Appointment creation form
    public function getFreeSlots(){
        $id = $request->input('id');                 // Get Employee id
        $date = $request->input('date');             // Get selected date
        $day = date('l', strtotime($date));     // Get day name from date

        $duty_day = Dutyday::where('employee_id', $id)->where('day', $day)
                    ->get()->first();

        if($duty_day) {
            $slot = null;
            $appointments = Appointment::where('date', $date)->where('employee_id', $id)
                            ->get();
            if(count($appointments) > 0){
                $timeslots = Timeslot::where('dutyday_id', $duty_day->id)
                    ->where('employee_id', $id);
                foreach($appointments as $appointment){
                    $slot = $timeslots->where('slot', '!=', $appointment->time)
                            ->get()->toJson();
                }
            }else{
                $slot = Timeslot::where('dutyday_id', $duty_day->id)
                        ->get()->toJson();
            }

            return response()->json($slot);
        }
        return 'false';
    }
}
