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
    	DB::table('hospitals')->truncate();
        $hospitals = [
                        [
                            'name' => 'UR CMHS Polyclinic',
                            'location' => 'Kigali Rwanda',
                            'quota_per_day' => 100,
                            'is_activated' => 1
                        ],
                        // [
                        //     'name' => 'CHUK Hospital',
                        //     'location' => 'Kigali Rwanda',
                        //     'quota_per_day' => 2000,
                        //     'is_activated' => 1
                        // ]
                    ];

      foreach($hospitals as $hospital){
        Hospital::create($hospital);
      }
    }
}
