<?php

use Illuminate\Database\Seeder;
class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->truncate();
        factory('App\Appointment', 10)->create();
    }
}
