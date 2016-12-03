<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckupfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkupfees', function (Blueprint $table) {
            $table->increments('id');
            $table->double('checkup_fee');
            $table->text('fee_note');
            $table->integer('patient_id');
            $table->integer('appointment_id');
            $table->integer('clinic_id')->unsigned()->nullable();
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
        Schema::dropIfExists('checkupfees');
    }
}
