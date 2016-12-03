<?php

use Illuminate\Database\Seeder;
use App\Clinic;
class ClinicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Clinic::where('id', 1)->delete();
        Clinic::create([
            'id' => '1',
            'name' => 'EMR Clinic',
            'address' => 'Kigali Rwanda'
        ]);
    }
}
