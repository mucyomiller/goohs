<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familyhistory extends Model
{
    protected $fillable = ['f_member_name','patient_relation','gender','age',
        'diesease_note', 'patient_id', 'clinic_id'];

    // Relationships
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
