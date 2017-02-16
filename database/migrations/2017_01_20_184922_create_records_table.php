<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('hospital_id')->unsigned();
            $table->text('presenting_complant')->nullable();
            $table->text('history_presenting_complant')->nullable();
            $table->text('past_medical_history')->nullable();
            $table->text('dietary_habits')->nullable();
            $table->text('family_social_history')->nullable();
            $table->string('gastrointestinal')->nullable();
            $table->string('genetourinary')->nullable();
            $table->string('respiratory')->nullable();
            $table->string('liver')->nullable();
            $table->string('locomotor')->nullable();
            $table->string('cardiovascular')->nullable();
            $table->string('kidneys')->nullable();
            $table->text('other')->nullable();
            // EXAMINATION
            // EXTRA ORAL
            $table->string('scasp_and_hair')->nullable();
            $table->string('ears')->nullable();
            $table->string('pulse_rate')->nullable();
            $table->string('skin')->nullable();
            $table->string('tms')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->string('eyes')->nullable();
            $table->string('noses')->nullable();
            //INTRA ORAL
            $table->string('lips')->nullable();
            $table->string('tongue')->nullable();
            $table->string('hard_tissues')->nullable();
            $table->string('vestibule')->nullable();
            $table->string('gingiva')->nullable();
            $table->string('occlusion')->nullable();
            $table->string('mucoza')->nullable();
            $table->string('palate')->nullable();
            $table->string('oral_hygiene')->nullable();
            $table->boolean('agreement')->default(0);
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
        Schema::dropIfExists('records');
    }
}
