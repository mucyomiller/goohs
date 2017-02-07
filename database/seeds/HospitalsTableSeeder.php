<?php

use Illuminate\Database\Seeder;
use App\Hospital;
class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Hospital::where('id', 1)->delete();
        Hospital::create([
            'name' => 'KHI Clinic',
            'location' => 'Kigali Rwanda',
            'is_activated' => 1
        ]);
    }
}
