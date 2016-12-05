<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
class Surgicalhistory extends Model
{
    protected $fillable = [
    'surgery_name','surgery_date','surgery_notes', 'patient_id', 'clinic_id'
    ];

    // Relationships
    public function patient()
    {
        return $this->belongsTo('Patient');
    }
}
