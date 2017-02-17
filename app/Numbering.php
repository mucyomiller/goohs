<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numbering extends Model
{
    protected $fillable = ['hospital_id', 'patient_id', 'queue_no'];
    public function patient(){
    	return $this->belongsTo('App\Patient');
    }
    public function hospital(){
    	return $this->belongsTo('App\Hospital');
    }
}
