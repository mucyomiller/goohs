<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamps = false;
    protected $table ='provinces';

    protected $fillable =['province_name'];
   

    public function districts()
    {
        return $this->hasMany('App\District');
    }
    public function sectors()
    {
        return $this->hasManyThrough('App\Sector', 'App\District');
    }

    /*
    * @Author: mucyomiller
    * Province Patients
    */
    public function patients(){
        return $this->hasManyThrough('App\Patient','App\District');
    }
}
