<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
    'employee_id','patient_id','hospital_id','presenting_complant','history_presenting_complant','past_medical_history','dietary_habits','family_social_history','gastrointestinal','genetourinary','respiratory','liver','locomotor','cardiovascular','kidneys','other','scasp_and_hair','ears','pulse_rate','skin','tms','blood_pressure','eyes','nodes','lips','tongue','hard_tissues','vestibule','gingiva','occlusion','mucoza','palate','oral_hygiene','agreement'
    ];

    function treatement_record_sheet(){
    	return $this->hasMany('App\TreatementRecordSheet');
    }
    function treatement_plan(){
    	return $this->hasMany('App\TreatementPlan');
    }
    function user(){
    	return $this->belongsTo('App\Patient');
    }
    function hospital(){
    	return $this->belongsTo('App\Hospital');
    }
    function doctor(){
    	return $this->belongsTo('App\Employee');
    }
}
