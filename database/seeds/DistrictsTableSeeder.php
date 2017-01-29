<?php

use Illuminate\Database\Seeder;
use App\District;
class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('districts')->truncate();
		$kigali =array("Gasabo","Kicukiro","Nyarugenge");
		$north =array("Burera","Gicumbi","Gakenke","Musanze","Rurindo");
		$south =array("Gisagara","Huye","Kamonyi","Muhanga","Nyamagabe","Nyanza","Nyaruguru","Ruhango");
		$est =array("Bugesera","Gatsibo","Kayonza","Kirehe","Ngoma","Nyagatare","Rwagamana");
		$west =array("Karongi","Ngororero","Nyabihu","Nyamasheke","Rubavu","Rutsiro","Rusizi");
		foreach($kigali as  $value)
		{
		District::create(['district_name'=>$value, 'province_id'=>1]);
		}
		foreach ($north as  $value) {
		District::create(['district_name'=>$value, 'province_id'=>2]);
		}
		foreach ($south as  $value) {
		District::create(['district_name'=>$value, 'province_id'=>3]);
		}
		foreach ($est as  $value) {
		District::create(['district_name'=>$value, 'province_id'=>4]);
		}
		foreach ($west as  $value) {
		District::create(['district_name'=>$value, 'province_id'=>5]);
		}

    }
}
