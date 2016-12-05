<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient
use App\Appointment;
class Checkupfee extends Model
{
    protected $fillable = ['checkup_fee', 'fee_note', 'patient_id', 'appointment_id', 'clinic_id'];

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
