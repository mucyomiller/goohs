<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labtest extends Model
{
    protected $fillable = ['test_name', 'test_description', 'test_results', 'total_fee',
        'patient_id', 'appointment_id', 'clinic_id'];

	public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
}
