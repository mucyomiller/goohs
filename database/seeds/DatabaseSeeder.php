<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Model::unguard();
         DB::table('provinces')->truncate();
         DB::table('districts')->truncate();
         DB::table('sectors')->truncate();
         DB::table('cells')->truncate();
         //$this->call(UsersTableSeeder::class);
         $this->call(HospitalsTableSeeder::class);
         //$this->call(PatientsTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         //$this->call(AppointmentsTableSeeder::class);
         $this->call(ProvincesTableSeeder::class);
         $this->call(DistrictsTableSeeder::class);
         $this->call(SectorsTableSeeder::class);
         //$this->call(CellsTableSeeder::class);
         Model::reguard();
    }
}
