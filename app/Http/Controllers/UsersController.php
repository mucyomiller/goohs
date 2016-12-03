<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Mail;
use Validator;
use App\User;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = User::where('clinic_id', Auth::user()->clinic_id)->paginate(10);

        return view('employees.index')->with(['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
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

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = User::findOrFail($id);
        return view('employees.show')->with(['employee'=>$employee]);
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
        return view('employees.edit')->with(['employee'=>$user]);
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

        return redirect()->route('employees.index');
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
        return redirect()->route('employees.index');
    }

    #########################################################
    #                                                       #
    #                  Validate User                        #
    #                                                       #
    #########################################################

    public function validate()
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password], true))
        {
            if(Auth::user()->status == 'Active' && Auth::user()->role == 'Doctor' && Auth::user()->clinic->admin->status == 'Active'){
                 return redirect()->to('doctor_home');
            }else if(Auth::user()->status == 'Active' && Auth::user()->role == 'Administrator'){
                return redirect()->to('admin_home');
            }
            else if(Auth::user()->status == 'Active' && Auth::user()->role == 'Receptionist' && Auth::user()->clinic->admin->status == 'Active'){
                return redirect()->to('receptionist_home');
            }
            else if(Auth::user()->status == 'Active' && Auth::user()->role == 'Lab Manager' && Auth::user()->clinic->admin->status == 'Active'){
                return redirect()->to('labmanager_home');
            }
            else if(Auth::user()->status == 'Active' && Auth::user()->role == 'Accountant' && Auth::user()->clinic->admin->status == 'Active'){
                return redirect()->to('accountant_home');
            }
            else if(Auth::user()->status == 'Active' && Auth::user()->role == 'Super User'){
                return redirect()->to('super_home');
            }else{
                return view('login')->withErrors('You are not Activated!');
                Auth::logout();
            }

        }else{
            $validator = Validator::make($request->all(), 
                [
                'email' => 'exists:user',
                'password' => 'exists:user'
                ]);
            if ($validator->fails())
            {
                Auth::logout();
                return view('login')->withErrors($validator);
            }
        }

    }
}
