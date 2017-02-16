<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
    'employee_id','patient_id','hospital_id','presenting_complant','history_presenting_complant','past_medical_history','dietary_habits','family_social_history','gastrointestinal','genetourinary','respiratory','liver','locomotor','cardiovascular','kidneys','other','scasp_and_hair','ears','pulse_rate','skin','tms','blood_pressure','eyes','noses','lips','tongue','hard_tissues','vestibule','gingiva','occlusion','mucoza','palate','oral_hygiene','agreement'
    ];

    public function treatement_record_sheet(){
    	return $this->hasMany('App\TreatementRecordSheet');
    }
    public function treatement_plan(){
    	return $this->hasMany('App\TreatementPlan');
    }
    public function patient(){
    	return $this->belongsTo('App\Patient');
    }
    public function hospital(){
    	return $this->belongsTo('App\Hospital');
    }
    public function doctor(){
    	return $this->belongsTo('App\Employee','employee_id','id');
    }
}
