<?php

use Illuminate\Database\Seeder;
use App\Patient;
class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::where('patient_id', 'P01')->delete();

        Patient::create(['name' => 'mucyo miller', 'dob' => date('Y-m-d', strtotime('-23 years')), 'gender' => 'Male',
        'age' => 25, 'email' => 'mucyomiller@gmail.com', 'city' => 'Kigali', 'country' => 'Rwanda',
        'address' => 'Kigali', 'phone' => '(0250) 222-2222222', 'cnic' => '12345-1234567-8', 'note' => 'Care the patient well.',
        'patient_id' => 'P01', 'clinic_id' => 1]);
    }
}
