<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    public $timestamps = false;
    protected $table ='sectors';

    protected $fillable =['sector_name','district_id'];

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function cells()
    {
        return $this->hasMany('App\Cell');
    }

    /*
    *  @Author: mucyomiller
    *  Sector has Patients
    */
    public function patients(){
      return $this->hasMany('App\Patient');
    }

}
