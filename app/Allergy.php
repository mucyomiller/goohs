<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
	protected $fillable = ['allergy_name','allergy_note', 'patient_id', 'clinic_id'];
	// Relationships
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

}
