<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Dutyday;
use App\User;
use App\Timeslot;
class DutydaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dutydays = Dutyday::where('clinic_id', Auth::user()->clinic_id)->groupBy('user_id')->paginate(10);

        return view('dashboard.dutydays.index')->with(['dutydays'=>$dutydays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = User::has('dutydays', '=', 0)->where('role', 'Doctor')
                ->where('status', 'Active')->where('clinic_id', Auth::user()->clinic_id)->get();
        return view('dashboard.dutydays.create')->with(['doctors'=>$doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), [/* 'title' => 'required' */]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['clinic_id'] = Auth::user()->clinic_id;
        if($request->input('Sunday') != null){
            $data['day'] = ($request->input('Sunday'));
            $data['start'] = str_replace(' ', '', ($request->input('sun_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('sun_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        if($request->input('Monday') != null){
            $data['day'] = ($request->input('Monday'));
            $data['start'] = str_replace(' ', '', ($request->input('mon_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('mon_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        if($request->input('Tuesday') != null){
            $data['day'] = ($request->input('Tuesday'));
            $data['start'] = str_replace(' ', '', ($request->input('tue_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('tue_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        if($request->input('Wednesday') != null){
            $data['day'] = ($request->input('Wednesday'));
            $data['start'] = str_replace(' ', '', ($request->input('wed_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('wed_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        if($request->input('Thursday') != null){
            $data['day'] = ($request->input('Thursday'));
            $data['start'] = str_replace(' ', '', ($request->input('thu_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('thu_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        if($request->input('Friday') != null){
            $data['day'] = ($request->input('Friday'));
            $data['start'] = str_replace(' ', '', ($request->input('fri_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('fri_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        if($request->input('Saturday') != null){
            $data['day'] = ($request->input('Saturday'));
            $data['start'] = str_replace(' ', '', ($request->input('sat_start_time')));
            $data['end'] = str_replace(' ', '', ($request->input('sat_end_time')));
            $day_id = Dutyday::create($data)->id;
            Dutyday::makeSlots($data['start'], $data['end'], $day_id, $data['employee_id']);
        }else{
            $data['day'] = null;
            $data['start'] = null;
            $data['end'] = null;
            Dutyday::create($data);
        }

        return redirect()->route('dutydays.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dutydays = Dutyday::where('employee_id', '=', $id)->get();

        $doctor = User::findOrFail($id);

        return view('dutydays.show')->with(['dutydays'=>$dutydays, 'doctor'=>$doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dutydays = Dutyday::where('employee_id', '=', $id)->get();

        $doctor = User::findOrFail($id);

        return view('dutydays.edit')->with(['dutydays'=>$dutydays, 'doctor'=>$doctor]);
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
        $validator = Validator::make($data = $request->all(), [/* 'title' => 'required' */]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dutydays = Dutyday::where('employee_id', '=', $id)->get();

            if($request->input('Sunday') != null){
                $dutydays[0]->day = ($request->input('Sunday'));
                $dutydays[0]->update();
                $dutydays[0]->start = str_replace(' ', '', ($request->input('sun_start_time')));
                $dutydays[0]->update();
                $dutydays[0]->end = str_replace(' ', '', ($request->input('sun_end_time')));
                $dutydays[0]->update();
                Dutyday::updateSlots($dutydays[0]->start, $dutydays[0]->end, $dutydays[0]->id);
            }else{
                $dutydays[0]->day = null;
                $dutydays[0]->update();
                $dutydays[0]->start = null;
                $dutydays[0]->update();
                $dutydays[0]->end = null;
                $dutydays[0]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[0]->id)->delete();
            }

            if($request->input('Monday') != null){
                $dutydays[1]->day = ($request->input('Monday'));
                $dutydays[1]->update();
                $dutydays[1]->start = str_replace(' ', '', ($request->input('mon_start_time')));
                $dutydays[1]->update();
                $dutydays[1]->end = str_replace(' ', '', ($request->input('mon_end_time')));
                $dutydays[1]->update();
                Dutyday::updateSlots($dutydays[1]->start, $dutydays[1]->end, $dutydays[1]->id);
            }else{
                $dutydays[1]->day = null;
                $dutydays[1]->update();
                $dutydays[1]->start = null;
                $dutydays[1]->update();
                $dutydays[1]->end = null;
                $dutydays[1]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[1]->id)->delete();
            }
            if($request->input('Tuesday') != null){
                $dutydays[2]->day = ($request->input('Tuesday'));
                $dutydays[2]->update();
                $dutydays[2]->start = str_replace(' ', '', ($request->input('tue_start_time')));
                $dutydays[2]->update();
                $dutydays[2]->end = str_replace(' ', '', ($request->input('tue_end_time')));
                $dutydays[2]->update();
                Dutyday::updateSlots($dutydays[2]->start, $dutydays[2]->end, $dutydays[2]->id);
            }else{
                $dutydays[2]->day = null;
                $dutydays[2]->update();
                $dutydays[2]->start = null;
                $dutydays[2]->update();
                $dutydays[2]->end = null;
                $dutydays[2]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[2]->id)->delete();
            }
            if($request->input('Wednesday') != null){
                $dutydays[3]->day = (Input::get('Wednesday'));
                $dutydays[3]->update();
                $dutydays[3]->start = str_replace(' ', '', ($request->input('wed_start_time')));
                $dutydays[3]->update();
                $dutydays[3]->end = str_replace(' ', '', ($request->input('wed_end_time')));
                $dutydays[3]->update();
                Dutyday::updateSlots($dutydays[3]->start, $dutydays[3]->end, $dutydays[3]->id);
            }else{
                $dutydays[3]->day = null;
                $dutydays[3]->update();
                $dutydays[3]->start = null;
                $dutydays[3]->update();
                $dutydays[3]->end = null;
                $dutydays[3]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[3]->id)->delete();
            }
            if($request->input('Thursday') != null){
                $dutydays[4]->day = ($request->input('Thursday'));
                $dutydays[4]->update();
                $dutydays[4]->start = str_replace(' ', '', ($request->input('thu_start_time')));
                $dutydays[4]->update();
                $dutydays[4]->end = str_replace(' ', '', ($request->input('thu_end_time')));
                $dutydays[4]->update();
                Dutyday::updateSlots($dutydays[4]->start, $dutydays[4]->end, $dutydays[4]->id);
            }else{
                $dutydays[4]->day = null;
                $dutydays[4]->update();
                $dutydays[4]->start = null;
                $dutydays[4]->update();
                $dutydays[4]->end = null;
                $dutydays[4]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[4]->id)->delete();
            }
            if($request->input('Friday') != null){
                $dutydays[5]->day = ($request->input('Friday'));
                $dutydays[5]->update();
                $dutydays[5]->start = str_replace(' ', '', ($request->input('fri_start_time')));
                $dutydays[5]->update();
                $dutydays[5]->end = str_replace(' ', '', ($request->input('fri_end_time')));
                $dutydays[5]->update();
                Dutyday::updateSlots($dutydays[5]->start, $dutydays[5]->end, $dutydays[5]->id);
            }
            else{
                $dutydays[5]->day = null;
                $dutydays[5]->update();
                $dutydays[5]->start = null;
                $dutydays[5]->update();
                $dutydays[5]->end = null;
                $dutydays[5]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[5]->id)->delete();
            }
            if($request->input('Saturday') != null){
                $dutydays[6]->day = ($request->input('Saturday'));
                $dutydays[6]->update();
                $dutydays[6]->start = str_replace(' ', '', ($request->input('sat_start_time')));
                $dutydays[6]->update();
                $dutydays[6]->end = str_replace(' ', '', ($request->input('sat_end_time')));
                $dutydays[6]->update();
                Dutyday::updateSlots($dutydays[6]->start, $dutydays[6]->end, $dutydays[6]->id);
            }
            else{
                $dutydays[6]->day = null;
                $dutydays[6]->update();
                $dutydays[6]->start = null;
                $dutydays[6]->update();
                $dutydays[6]->end = null;
                $dutydays[6]->update();
                Timeslot::where('dutyday_id', '=', $dutydays[6]->id)->delete();
            }

        return redirect()->route('dutydays.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dutyday::destroy($id);

        return redirect()->route('dutydays.index');
    }
}
