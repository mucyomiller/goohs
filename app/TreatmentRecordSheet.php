<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentRecordSheet extends Model
{
    protected $fillable = [
    'record_id','procedure_code','tooths_no','sextant_no','treatment_notes','treatments_id'
    ];

    public function record(){
    	return $this->belongsTo('App\Record');
    }
}
