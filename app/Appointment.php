<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['checkup_reason', 'date', 'start_time', 'end_time', 'approved', 'user_id', 'patient_id', 'clinic_id'];


    // Relationships
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function prescription()
    {
        return $this->hasOne('App\Prescription');
    }

    // public function timeslot()
    // {
    //     return $this->belongsTo('App\Timeslot', 'timeslot_id');
    // }

    public function vitalsign()
    {
        return $this->hasOne('App\Vitalsign');
    }

    public function diagonosticprocedure()
    {
        return $this->hasOne('App\Diagonosticprocedure');
    }

    public function labtests()
    {
        return $this->hasMany('App\Labtest');
    }

    // public function checkupfee()
    // {
    //     return $this->hasOne('App\Checkupfee');
    // }
}
