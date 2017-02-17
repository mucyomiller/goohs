<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['user_id', 'patientID', 'dob', 'fathername', 'mothername','cell_id', 'sector_id', 'district_id','gender'];

	/**
     * Relationships
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function cell(){
        return $this->belongsTo('App\Cell');
    }
    public function sector(){
        return $this->belongsTo('App\Sector');
    }
    public function district(){
        return $this->belongsTo('App\District');
    }
    public function records(){
        return $this->hasMany('App\Record');
    }
    public function number(){
        return $this->hasMany('App\Numbering');
    }
    public function allergies()
    {
        return $this->hasMany('App\Allergy');
    }

    public function drugusages()
    {
        return $this->hasMany('App\Drugusage');
    }

    public function familyhistories()
    {
        return $this->hasMany('App\Familyhistory');
    }

    public function previousdiseases()
    {
        return $this->hasMany('App\Previousdisease');
    }

    public function surgicalhistories()
    {
        return $this->hasMany('App\Surgicalhistory');
    }

    public function diagonosticprocedures()
    {
        return $this->hasMany('App\Diagonosticprocedure');
    }

    public function vitalsigns()
    {
        return $this->hasMany('App\Vitalsign');
    }

    public function labtests()
    {
        return $this->hasMany('App\Labtest');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function prescriptions()
    {
        return $this->hasMany('App\Prescription');
    }

    public function checkupfees()
    {
        return $this->hasMany('App\Checkupfee');
    }
}
