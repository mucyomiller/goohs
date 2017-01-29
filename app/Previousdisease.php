<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Previousdisease extends Model
{
    protected $fillable = ['disease_name','disease_notes', 'patient_id', 'clinic_id'];

    // Relationships
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
