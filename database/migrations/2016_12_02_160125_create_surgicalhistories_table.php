<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgicalhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgicalhistories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surgery_name');
            $table->date('surgery_date');
            $table->text('surgery_notes');
            $table->string('patient_id');
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
        Schema::dropIfExists('surgicalhistories');
    }
}
