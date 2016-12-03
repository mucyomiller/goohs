<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'mucyo miller', 'password' => Hash::make('123456'), 'email' => 'super@gmail.com',
            'gender' => 'Male', 'age' => '23', 'city' => 'Lahore', 'country' => 'Rwanda', 'address' => '10 Down Street', 'phone' => '03344050495',
            'cnic' => '1234679', 'role' => 'Super User', 'status' => 'Active', 'branch' => 'DHA', 'note' => 'MBBS Qualified']);
	    User::create(['name' => 'Shah', 'password' => Hash::make('123456'), 'email' => 'admin@gmail.com',
        'gender' => 'Male', 'age' => '23', 'city' => 'Butare', 'country' => 'Rwanda', 'address' => '10 Down Street', 'phone' => '03344050495',
        'cnic' => '1234679', 'role' => 'Administrator', 'status' => 'Active', 'branch' => 'DHA', 'note' => 'MBBS Qualified', 'clinic_id'  => 1]);
	    User::create(['name' => 'miller', 'password' => Hash::make('123456'), 'email' => 'doctor@gmail.com',
        'gender' => 'Male', 'age' => '23', 'city' => 'Lahore', 'country' => 'Rwanda', 'address' => '10 Down Street', 'phone' => '03344050495',
        'cnic' => '1234679', 'role' => 'Doctor', 'status' => 'Active', 'branch' => 'DHA', 'note' => 'MBBS Qualified', 'clinic_id'  => 1]);

	    User::create(['name' => 'mucyo', 'password' => Hash::make('123456'), 'email' => 'accountant@gmail.com',
        'gender' => 'Male', 'age' => '23', 'city' => 'Rwanda', 'country' => 'Rwanda', 'address' => '10 Down Street', 'phone' => '03344050495',
        'cnic' => '1234679', 'role' => 'Accountant', 'status' => 'Active', 'branch' => 'DHA', 'note' => 'MBBS Qualified', 'clinic_id'  => 1]);

	    User::create(['name' => 'butera', 'password' => Hash::make('123456'), 'email' => 'receptionist@gmail.com',
        'gender' => 'Male', 'age' => '23', 'city' => 'Lahore', 'country' => 'Rwanda', 'address' => '10 Down Street', 'phone' => '03344050495',
        'cnic' => '1234679', 'role' => 'Receptionist', 'status' => 'Active', 'branch' => 'DHA', 'note' => 'MBBS Qualified', 'clinic_id'  => 1]);

	    User::create(['name' => 'fred', 'password' => Hash::make('123456'), 'email' => 'lab@gmail.com',
        'gender' => 'Male', 'age' => '23', 'city' => 'Rwanda', 'country' => 'Rwanda', 'address' => '10 Down Street', 'phone' => '03344050495',
        'cnic' => '1234679', 'role' => 'Lab Manager', 'status' => 'Active', 'branch' => 'DHA', 'note' => 'MBBS Qualified', 'clinic_id'  => 1]);
    }
}
