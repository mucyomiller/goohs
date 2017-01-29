<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drugusage extends Model
{
    protected $fillable = ['drug_name', 'usage_note', 'patient_id', 'clinic_id'];

    // Relationships
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
