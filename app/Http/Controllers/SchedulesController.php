<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Appointment;
use Calendar;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response.
     */
    public function index()
    {
        //$appointments=Appointment::with('patient')->get(['patient_id as title','date as start','id'])->toJson();;

       //dd($appointments);
       // return view('dashboard.doctor.scheduler')->with(['events'=>$appointments]);

        $event = [];
        $appointments = Appointment::all();
        foreach($appointments as $appointment){
         $event = Calendar::event(
            $appointment->patient->user->names,
            false,
            new \DateTime($appointment->date),
            new \DateTime($appointment->date),
            $appointment->id,
             [
        'url' => '/index',
        //any other full-calendar supported parameters
        ]
            );
          //dd($event);
             $calendar= Calendar::addEvent($event)
                            ->setOptions([
                              'firstDay'=> 1
                            ])->setCallbacks([]);
             
        }
        
      

        // foreach($appointments as $appointment){
        //     array_push($events,[
        //         'title' =>$appointment->patient->user->names,
        //         'start' =>$appointment->date,
        //         ]);
        // }
        return view('dashboard.doctor.scheduler')->with(['calendar'=>$calendar]);
    }


    public function appointments()
    {
        //$appointments=Appointment::with('patient')->get(['patient_id as title','date as start','id'])->toJson();;

       //dd($appointments);
       // return view('dashboard.doctor.scheduler')->with(['events'=>$appointments]);

        $events = [];
        $appointments = Appointment::all();
        foreach($appointments as $appointment){
            array_push($events,[
                'title' =>$appointment->patient->user->names,
                'start' =>$appointment->date,
                ]);
          

        }
          return response()->json($events);
  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
