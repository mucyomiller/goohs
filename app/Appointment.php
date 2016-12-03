<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['checkup_reason', 'time', 'date', 'status', 'checkup_fee', 'fee_note',
    'timeslot_id', 'patient_id', 'employee_id', 'clinic_id'];


    // Relationships
    public function patient()
    {
        return $this->belongsTo('Patient');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function prescription()
    {
        return $this->hasOne('Prescription');
    }

    public function timeslot()
    {
        return $this->belongsTo('Timeslot', 'timeslot_id');
    }

    public function vitalsign()
    {
        return $this->hasOne('Vitalsign');
    }

    public function diagonosticprocedure()
    {
        return $this->hasOne('Diagonosticprocedure');
    }

    public function labtests()
    {
        return $this->hasMany('Labtest');
    }

    public function checkupfee()
    {
        return $this->hasOne('CheckupFee');
    }
}
