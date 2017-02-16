<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatementRecordSheet extends Model
{
    protected $fillable = [
    'record_id','procedure_code','tooths_no','sextant_no','treatement_notes','treatments_id'
    ];

    public function record(){
    	return $this->belongsTo('App\Record');
    }
}
