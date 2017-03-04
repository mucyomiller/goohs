<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Mail;
use Validator;
use App\User;
use App\Employee;
use App\Hospital;
use App\Role;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::where('hospital_id', Auth::user()->employee->hospital_id)->get();
        return view('dashboard.employees.index')->with(['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = ['doctor','nurse','labmanager','accountant','receptionist','user'];
        $hospital = Hospital::where('id', Auth::user()->employee->hospital_id)->first();
        return view('dashboard.employees.create')->with(['users'=>$users,'hospital'=>$hospital,'roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user'   => 'required|exists:users,id',
            'hospital'  => 'required|exists:hospitals,id',
            'country'   => 'required',
            'role'      => 'required',
            'address'   => 'required',
            'branch'    => 'required',
            'note'      => 'required',
            ]);
        if($request->has('status'))
        {
            $status = 1;
        }
        else
        {
            $status = 0;   
        }

        //creating employee
        $emp = Employee::create(
            [
                'user_id'     => $request->input('user'),
                'hospital_id' => $request->input('hospital'),
                'country'     => $request->input('country'),
                'address'     => $request->input('address'),
                'branch'      => $request->input('branch'),
                'note'        => $request->input('note'),
                'status'      => $status,
            ]);
        //getting admin role(manger of hospital)
        $role = Role::where('name',$request->input('role'))->first();
        $emp->user->attachRole($role);
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
        $users =  User::all();
        $hospitals =  Hospital::all();
        $employee = Employee::where('id',$id)->first();
        return view('dashboard.employees.edit')->with(['employee'=>$employee,'users'=>$users,'hospitals'=>$hospitals]);
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
