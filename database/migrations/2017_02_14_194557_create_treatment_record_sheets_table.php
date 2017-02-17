<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentRecordSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_record_sheets', function (Blueprint $table) {
            $table->increments('id');
            //important medical concern
            $table->integer('record_id')->unsigned();
            $table->string('procedure_code')->nullable();
            $table->string('tooths_no')->nullable();
            $table->string('sextant_no')->nullable();
            $table->string('treatment_notes')->nullable();
            $table->string('treatments_id')->nullable();
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
        Schema::dropIfExists('treatment_record_sheets');
    }
}
