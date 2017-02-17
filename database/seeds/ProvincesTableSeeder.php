<?php

use Illuminate\Database\Seeder;
use App\Province;
class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();
        $provinces  = array("kigali City","northern province","southern province","estern province","western province");
        foreach ($provinces as $value) {
            Province::create(['province_name'=>$value]);
        }
    }
}
