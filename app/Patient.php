<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Allergy;
use App\Drugusage;
use App\Familyhistory;
use App\Previousdisease;
use App\Surgicalhistory;
use App\Diagonosticprocedure;
use App\Vitalsign;
use App\Labtest;
use App\Appointment;
use App\Prescription;
use App\Checkupfee;
class Patient extends Model
{
    protected $fillable = ['name', 'dob', 'gender', 'age', 'email', 'city', 'country', 'address',
    'phone', 'cnic', 'note', 'clinic_id'];

	//  Relationships
    public function allergies()
    {
        return $this->hasMany('Allergy');
    }

    public function drugusages()
    {
        return $this->hasMany('Drugusage');
    }

    public function familyhistories()
    {
        return $this->hasMany('Familyhistory');
    }

    public function previousdiseases()
    {
        return $this->hasMany('Previousdisease');
    }

    public function surgicalhistories()
    {
        return $this->hasMany('Surgicalhistory');
    }

    public function diagonosticprocedures()
    {
        return $this->hasMany('Diagonosticprocedure');
    }

    public function vitalsigns()
    {
        return $this->hasMany('Vitalsign');
    }

    public function labtests()
    {
        return $this->hasMany('Labtest');
    }

    public function appointments()
    {
        return $this->hasMany('Appointment');
    }

    public function prescriptions()
    {
        return $this->hasMany('Prescription');
    }

    public function checkupfees()
    {
        return $this->hasMany('Checkupfee');
    }
}
