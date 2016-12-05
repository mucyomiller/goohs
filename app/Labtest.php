<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Appointment;
class Labtest extends Model
{
    protected $fillable = ['test_name', 'test_description', 'test_results', 'total_fee',
        'patient_id', 'appointment_id', 'clinic_id'];

	public function patient()
    {
        return $this->belongsTo('Patient');
    }

    public function appointment()
    {
        return $this->belongsTo('Appointment');
    }
}
