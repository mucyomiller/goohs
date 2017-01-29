<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosticprocedure extends Model
{
	protected $fillable = ['procedure_note', 'patient_id', 'appointment_id'];

	// Relationships
	public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
}
