<?php

use Illuminate\Database\Seeder;
class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //temporary disable truncates;
        //DB::table('patients')->truncate();
        factory('App\Patient', 10)->create();
    }
}
