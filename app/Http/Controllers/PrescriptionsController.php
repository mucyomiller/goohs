<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Patient;
use App\Appointment;
use App\Prescription;
use App\Medicine;
class PrescriptionsController extends Controller
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
        $appointments = $patient->appointments()->has('prescription')->paginate(10);
        return view('dashboard.prescriptions.index')
        ->with(['appointments'=>$appointments,'patient_id'=>$patient_id]);
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
        $doctors = User::where('role', 'Doctor')->where('status', 'Active')
                    ->where('clinic_id', Auth::user()->clinic_id)->get();
        $medicine1 = $medicine2 = $medicine3 = $medicine4 = $medicine5 = $medicine6 = Medicine::where('clinic_id', Auth::user()->clinic_id)
                                ->get()->lists('name', 'id');
        return view('prescriptions.create')
        ->with([
            'medicine1'     => $medicine1,
            'medicine2'     => $medicine2,
            'medicine3'     => $medicine3,
            'medicine4'     => $medicine4,
            'medicine5'     => $medicine5,
            'medicine6'     => $medicine6,
            'appointment'   => $appointment,
            'patient_id'    => $patient_id,
            'doctors'       => $doctors
            ]);
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

        if($request->input('medicine1_id') != null){
            $medicine = Medicine::find($request->input('medicine1_id'));
            if($request->input('med1_qty') < $medicine->quantity){
                $medicine->quantity -= $request->input('med1_qty');
            }else{
                $data['med1_qty'] = $medicine->quantity;
                $medicine->quantity = 0;
            }

            $medicine->update();
        }else{
            $data['medicine1_id'] = null;
        }

        if($request->input('medicine2_id') != null){
            $medicine = Medicine::find($request->input('medicine2_id'));
            if($request->input('med2_qty') < $medicine->quantity){
                $medicine->quantity -= $request->input('med2_qty');
            }else{
                $data['med2_qty'] = $medicine->quantity;
                $medicine->quantity = 0;
            }
            $medicine->update();
        }else{
            $data['medicine2_id'] = null;
        }

        if($request->input('medicine3_id') != null){
            $medicine = Medicine::find($request->input('medicine3_id'));
            if($request->input('med3_qty') < $medicine->quantity){
                $medicine->quantity -= $request->input('med3_qty');
            }else{
                $data['med3_qty'] = $medicine->quantity;
                $medicine->quantity = 0;
            }
            $medicine->update();
        }else{
            $data['medicine3_id'] = null;
        }

        if($request->input('medicine4_id') != null){
            $medicine = Medicine::find($request->input('medicine4_id'));
            if($request->input('med4_qty') < $medicine->quantity){
                $medicine->quantity -= $request->input('med4_qty');
            }else{
                $data['med4_qty'] = $medicine->quantity;
                $medicine->quantity = 0;
            }
            $medicine->update();
        }else{
            $data['medicine4_id'] = null;
        }

        if($request->input('medicine5_id') != null){
            $medicine = Medicine::find($request->input('medicine5_id'));
            if($request->input('med5_qty') < $medicine->quantity){
                $medicine->quantity -= $request->input('med5_qty');
            }else{
                $data['med5_qty'] = $medicine->quantity;
                $medicine->quantity = 0;
            }
            $medicine->update();
        }else{
            $data['medicine5_id'] = null;
        }
        if($request->input('medicine6_id') != null){
            $medicine = Medicine::find($request->input('medicine6_id'));
            if($request->input('med6_qty') < $medicine->quantity){
                $medicine->quantity -= $request->input('med6_qty');
            }else{
                $data['med6_qty'] = $medicine->quantity;
                $medicine->quantity = 0;
            }
            $medicine->update();
        }else{
            $data['medicine6_id'] = null;
        }
        Prescription::create($data);
        return redirect()->to('/app_prescription');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $prescription = Prescription::where('appointment_id', $id)->get()->first();
        if($request->input('flag') != null) {
            $flag = $request->input('flag');
        }
        $medicines = [];

        if($prescription->medicine1_id){
            $name = $prescription->medicine1->name;
            $qty = $prescription->med1_qty;
            array_push($medicines, ['name' => $name, 'qty' => $qty]);
        }

        if($prescription->medicine2_id){
            $name = $prescription->medicine2->name;
            $qty = $prescription->med2_qty;
            array_push($medicines, ['name' => $name, 'qty' => $qty]);
        }

        if($prescription->medicine3_id){
            $name = $prescription->medicine3->name;
            $qty = $prescription->med3_qty;
            array_push($medicines, ['name' => $name, 'qty' => $qty]);
        }

        if($prescription->medicine4_id){
            $name = $prescription->medicine4->name;
            $qty = $prescription->med4_qty;
            array_push($medicines, ['name' => $name, 'qty' => $qty]);
        }

        if($prescription->medicine5_id){
            $name = $prescription->medicine5->name;
            $qty = $prescription->med5_qty;
            array_push($medicines, ['name' => $name, 'qty' => $qty]);
        }

        if($prescription->medicine6_id){
            $name = $prescription->medicine6->name;
            $qty = $prescription->med6_qty;
            array_push($medicines, ['name' => $name, 'qty' => $qty]);
        }
        return view('prescriptions.show')
        ->with(['prescription'=>$prescription, 'flag'=>$flag, 'medicines'=>$medicines]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prescription = Prescription::where('appointment_id', $id)->get()->first();

        $medicine1 = $medicine2 = $medicine3 = $medicine4 = $medicine5 = $medicine6 = Medicine::where('clinic_id', Auth::user()->clinic_id)
            ->get()->lists('name', 'id');

        return view('prescriptions.edit')
        ->with([
            'medicine1'     =>$medicine1,
            'medicine2'     =>$medicine2,
            'medicine3'     =>$medicine3,
            'medicine4'     =>$medicine4,
            'medicine5'     =>$medicine5,
            'medicine6'     =>$medicine6,
            'prescription'  =>$prescription
            ]);
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
        $prescription = Prescription::findOrFail($id);

        $validator = Validator::make($data = $request->all(), [/* 'title' => 'required' */]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['patient_id'] = $prescription->patient_id;

        if($request->input('medicine1_id') != null){
            $medicine = Medicine::find($request->input('medicine1_id'));
            if($medicine->id != $prescription->medicine1_id){
                if($request->input('med1_qty') < $medicine->quantity){
                    $medicine->quantity -= $request->input('med1_qty');
                }else{
                    $data['med1_qty'] = $medicine->quantity;
                    $medicine->quantity = 0;
                }
            }else {
                if ($prescription->med1_qty < $request->input('med1_qty')) {
                    $difference = $request->input('med1_qty') - $prescription->med1_qty;
                    $medicine->quantity -= $difference;
                } else if ($prescription->med1_qty > $request->input('med1_qty')) {
                    $difference = $prescription->med1_qty - $request->input('med1_qty');
                    $medicine->quantity += $difference;
                }
                if($medicine->quantity < 0){
                    $medicine->quantity = 0;
                    $data['med1_qty'] = 0;
                }
            }
            $medicine->update();
        }else{
            $data['medicine1_id'] = null;
            $data['med1_qty'] = 0;
        }

        if($request->input('medicine2_id') != null){
            $medicine = Medicine::find($request->input('medicine2_id'));
            if($medicine->id != $prescription->medicine2_id){
                if($request->input('med2_qty') < $medicine->quantity){
                    $medicine->quantity -= $request->input('med2_qty');
                }else{
                    $data['med2_qty'] = $medicine->quantity;
                    $medicine->quantity = 0;
                }
            }else {
                if ($prescription->med2_qty < $request->input('med2_qty')) {
                    $difference = $request->input('med2_qty') - $prescription->med2_qty;
                    $medicine->quantity -= $difference;
                } else if ($prescription->med2_qty > $request->input('med2_qty')) {
                    $difference = $prescription->med2_qty - $request->input('med2_qty');
                    $medicine->quantity += $difference;
                }
                if($medicine->quantity < 0){
                    $medicine->quantity = 0;
                    $data['med2_qty'] = 0;
                }
            }
            $medicine->update();
        }else{
            $data['medicine2_id'] = null;
            $data['med2_qty'] = 0;
        }

        if($request->input('medicine3_id') != null){
            $medicine = Medicine::find($request->input('medicine3_id'));
            if($medicine->id != $prescription->medicine3_id){
                if($request->input('med3_qty') < $medicine->quantity){
                    $medicine->quantity -= $request->input('med3_qty');
                }else{
                    $data['med3_qty'] = $medicine->quantity;
                    $medicine->quantity = 0;
                }
            }else {
                if ($prescription->med3_qty < $request->input('med3_qty')) {
                    $difference = $request->input('med3_qty') - $prescription->med3_qty;
                    $medicine->quantity -= $difference;
                } else if ($prescription->med3_qty > $request->input('med3_qty')) {
                    $difference = $prescription->med3_qty - $request->input('med3_qty');
                    $medicine->quantity += $difference;
                }
                if($medicine->quantity < 0){
                    $medicine->quantity = 0;
                    $data['med3_qty'] = 0;
                }
            }
            $medicine->update();
        }else{
            $data['medicine3_id'] = null;
            $data['med3_qty'] = 0;
        }

        if($request->input('medicine4_id') != null){
            $medicine = Medicine::find($request->input('medicine4_id'));
            if($medicine->id != $prescription->medicine4_id){
                if($request->input('med4_qty') < $medicine->quantity){
                    $medicine->quantity -= $request->input('med4_qty');
                }else{
                    $data['med4_qty'] = $medicine->quantity;
                    $medicine->quantity = 0;
                }
            }else {
                if ($prescription->med4_qty < $request->input('med4_qty')) {
                    $difference = $request->input('med4_qty') - $prescription->med4_qty;
                    $medicine->quantity -= $difference;
                } else if ($prescription->med4_qty > $request->input('med4_qty')) {
                    $difference = $prescription->med4_qty - $request->input('med4_qty');
                    $medicine->quantity += $difference;
                }
                if($medicine->quantity < 0){
                    $medicine->quantity = 0;
                    $data['med4_qty'] = 0;
                }
            }
            $medicine->update();
        }else{
            $data['medicine4_id'] = null;
            $data['med4_qty'] = 0;
        }

        if($request->input('medicine5_id') != null){
            $medicine = Medicine::find($request->input('medicine5_id'));
            if($medicine->id != $prescription->medicine5_id){
                if($request->input('med5_qty') < $medicine->quantity){
                    $medicine->quantity -= $request->input('med5_qty');
                }else{
                    $data['med5_qty'] = $medicine->quantity;
                    $medicine->quantity = 0;
                }
            }else {
                if ($prescription->med5_qty < $request->input('med5_qty')) {
                    $difference = $request->input('med5_qty') - $prescription->med5_qty;
                    $medicine->quantity -= $difference;
                } else if ($prescription->med5_qty > $request->input('med5_qty')) {
                    $difference = $prescription->med5_qty - $request->input('med5_qty');
                    $medicine->quantity += $difference;
                }
                if($medicine->quantity < 0){
                    $medicine->quantity = 0;
                    $data['med5_qty'] = 0;
                }
            }
            $medicine->update();
        }else{
            $data['medicine5_id'] = null;
            $data['med5_qty'] = 0;
        }

        if($request->input('medicine6_id') != null){
            $medicine = Medicine::find($request->input('medicine6_id'));
            if($medicine->id != $prescription->medicine6_id){
                if($request->input('med6_qty') < $medicine->quantity){
                    $medicine->quantity -= $request->input('med6_qty');
                }else{
                    $data['med6_qty'] = $medicine->quantity;
                    $medicine->quantity = 0;
                }
            }else {
                if ($prescription->med6_qty < $request->input('med6_qty')) {
                    $difference = $request->input('med6_qty') - $prescription->med6_qty;
                    $medicine->quantity -= $difference;
                } else if ($prescription->med6_qty > $request->input('med6_qty')) {
                    $difference = $prescription->med6_qty - $request->input('med6_qty');
                    $medicine->quantity += $difference;
                }
                if($medicine->quantity < 0){
                    $medicine->quantity = 0;
                    $data['med6_qty'] = 0;
                }
            }
            $medicine->update();
        }else{
            $data['medicine6_id'] = null;
            $data['med6_qty'] = 0;
        }

        $prescription->update($data);

        return redirect()->to('prescriptions?id='.$prescription->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prescription::destroy($id);
        return redirect()->route('prescriptions.index');
    }
}
