<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;
use App\Hospital;
use App\Role;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::all();
    	$managers = $users->filter(function($user){
    		return $user->hasRole('admin');
    	});
        return view('dashboard.hospitalmanager.index',['managers'=>$managers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	$hospitals = Hospital::all();
	// $hospitals = $hospitals->filter(function($hospital){
	// 	return $hospital->employees->filter(function($employee){
	// 		return !$employee->user->hasRole('admin');
	// 	});
	// });
	// dd($hospitals);
	$users	   = User::all();
	$users     = $users->filter(function($user){
		return !$user->hasRole('admin') && !$user->hasRole('superuser');
	});
    return view('dashboard.hospitalmanager.create')->with(['hospitals'=>$hospitals,'users'=>$users]);
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
            'manager'   => 'required|exists:users,id',
            'hospital'  => 'required|exists:hospitals,id',
            'country'   => 'required',
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
                'user_id'     => $request->input('manager'),
                'hospital_id' => $request->input('hospital'),
                'country'     => $request->input('country'),
                'address'     => $request->input('address'),
                'branch'      => $request->input('branch'),
                'note'        => $request->input('note'),
                'status'      => $status,
            ]);
        //getting admin role(manger of hospital)
        $admin = Role::where('name','admin')->first();
        $emp->user->attachRole($admin);
        return redirect()->route('manager.index');
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
        $users =  User::all();
        $hospitals =  Hospital::all();
        $manager = Employee::where('id',$id)->first();
        return view('dashboard.hospitalmanager.edit')->with(['manager'=>$manager,'users'=> $users,'hospitals'=> $hospitals]);
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
