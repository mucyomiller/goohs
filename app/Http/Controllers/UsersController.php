<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Mail;
use Validator;
use App\User;
use App\Employee;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::where('hospital_id', Auth::user()->employee->hospital_id)->paginate(10);

        return view('dashboard.employees.index')->with(['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employees.create');
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
            'password'  => 'min:6',
            'email'     => 'unique:employees',
            'status'    => 'required',
            'role'      => 'required'
            ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $employee = new User();
        $employee->name = $request->input('name');
        $employee->clinic_id = Auth::user()->clinic_id;
        $employee->password = Hash::make($request->input('password'));
        $employee->email = $request->input('email');
        $employee->gender = $request->input('gender');
        $employee->age = $request->input('age');
        $employee->city = $request->input('city');
        $employee->country = $request->input('country');
        $employee->address = $request->input('address');

        if($request->input('phone') == ''){
            $employee->phone = 'N/A';
        }else {
            $employee->phone = $request->input('phone');
        }

        if($request->input('cnic') == ''){
            $employee->cnic = 'N/A';
        }else {
            $employee->cnic = $request->input('cnic');
        }

        if($request->input('branch') == ''){
            $employee->branch = 'N/A';
        }else {
            $employee->branch = $request->input('branch');
        }

        if($request->input('note') == ''){
            $employee->note = 'N/A';
        }else {
            $employee->note = $request->input('note');
        }

        $employee->status = $request->input('status');
        $employee->role = $request->input('role');
        $employee->save();

        $data = ['link' => URL::to('login'), 'name' => $request->input('name')];
        // Send email to employee
        Mail::queue('emails.welcome', $data, function($message)
        {
            $message->to($request->input('email'), $request->input('name'))->subject('Welcome to GOOHS!');
        });

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('dashboard.employees.show')->with(['employee'=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.employees.edit')->with(['employee'=>$user]);
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
        $user = User::findOrFail($id);

        if ($request->input('email') !== $user->email) {
            $input = array('email' => $request->input('email'));
            $validator = Validator::make($input, array('email' => 'unique:users'));

            if ($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }

        }

        $data = $request->all();
        $validator = Validator::make($data, 
            [
            'status' => 'required',
             'role' => 'required'
             ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
