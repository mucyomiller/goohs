<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $superUser =new Role();  //superUser
        $superUser->name 			='superuser'; 
        $superUser->display_name	='Super User';
        $superUser->description 	='High privileged User';
        $superUser->save();


        $admin =new Role();  //admin
        $admin->name 			='admin'; 
        $admin->display_name	='Admin user';
        $admin->description 	='privileged user';
        $admin->save();

		$doctor =new Role();  //doctors users
        $doctor->name          ='doctor';
        $doctor->display_name  ='Doctor';
        $doctor->description   ='Doctor User';
        $doctor->save();

        
		$nurse =new Role();  //nurse users
        $nurse->name          ='nurse';
        $nurse->display_name  ='Nurse';
        $nurse->description   ='Nurse User';
        $nurse->save();

        $nurse =new Role();  //labmanager users
        $nurse->name          ='labmanager';
        $nurse->display_name  ='Lab Manager';
        $nurse->description   ='Lab Manager User';
        $nurse->save();

        $accountant =new Role();  //accountant
        $accountant->name 			='accountant'; 
        $accountant->display_name	='Accountant';
        $accountant->description 	='The hospital accountant';
        $accountant->save();

		$receptionist =new Role();  //receptionist
        $receptionist->name 			='receptionist'; 
        $receptionist->display_name		='Receptionist';
        $receptionist->description 		='The hospital receptionist';
        $receptionist->save();

		$user =new Role();  //user
        $user->name 			='user'; 
        $user->display_name		='User';
        $user->description 		='regular user';
        $user->save();
        


    }
}
