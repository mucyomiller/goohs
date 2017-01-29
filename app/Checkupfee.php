<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkupfee extends Model
{
    protected $fillable = ['checkup_fee', 'fee_note', 'patient_id', 'appointment_id', 'clinic_id'];

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
