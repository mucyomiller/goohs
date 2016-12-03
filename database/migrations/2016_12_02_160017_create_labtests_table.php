<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labtests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('test_name');
            $table->text('test_description');
            $table->double('total_fee');
            $table->integer('patient_id');
            $table->integer('appointment_id');
            $table->text('test_results');
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
        Schema::dropIfExists('labtests');
    }
}
