<?php

use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncating error cz many tables  references users table
        //DB::table('users')->truncate();
        factory('App\User', 10)->create();
    }
}
