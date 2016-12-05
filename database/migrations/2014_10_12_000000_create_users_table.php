<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('gender');
            $table->integer('age');
            $table->string('city');
            $table->string('country');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('cnic')->nullable();
            $table->string('branch')->nullable();
            $table->text('note')->nullable();
            $table->string('status')->nullable();
            $table->string('role')->nullable();
            $table->integer('clinic_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
