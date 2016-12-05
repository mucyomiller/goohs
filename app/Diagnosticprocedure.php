<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Appointment;
class Diagnosticprocedure extends Model
{
	protected $fillable = ['procedure_note', 'patient_id', 'appointment_id'];

	// Relationships
	public function patient()
    {
        return $this->belongsTo('Patient');
    }

    public function appointment()
    {
        return $this->belongsTo('Appointment');
    }
}
