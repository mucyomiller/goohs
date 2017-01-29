<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vitalsign extends Model
{
    protected $fillable = [
    'weight', 'height', 'bp_systolic', 'bp_diastolic', 'blood_group',
    'pulse_rate', 'respiration_rate', 'temprature', 'note', 'patient_id',
    'appointment_id', 'clinic_id'
    ];

	public function patient()
    {
        return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
}
