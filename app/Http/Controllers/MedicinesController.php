<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Medicine;
class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::where('clinic_id', Auth::user()->clinic_id)->paginate(10);
        return view('dashboard.medicines.index')
        ->with(['medicines'=>$medicines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.medicines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($data = $request->all(), ['name' => 'required']);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data['clinic_id'] = Auth::user()->clinic_id;
        Medicine::create($data);
        return redirect()->route('medicines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);
        return view('dashboard.medicines.show')
        ->with(['medicine'=>$medicine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::find($id);
        return view('dashboard.medicines.edit')
        ->with(['medicine'=>$medicine]);
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
        $medicine = Medicine::findOrFail($id);
        $validator = Validator::make($data = $request->all(), ['name' => 'required']);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $medicine->update($data);
        return redirect()->route('medicines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicine::destroy($id);
        return redirect()->route('medicines.index');
    }
}
