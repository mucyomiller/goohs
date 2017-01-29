<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table ='districts';
    public $timestamps =false;

    protected $fillable =['district_name','province_id'];
    
   /*
   *   @province
   */
    public function province()
    {
        return$this->belongsTo('App\Province');
    }

    public function sectors()
    {
        return $this->hasMany('App\Sector');
    }

    public function cells()
    {
          return $this->hasManyThrough('App\Cell', 'App\Sector');
    }
    /*
    *  @Author: mucyomiller
    *  District has Patients
    */
    public function patients(){
      return $this->hasMany('App\Patient');
    }
}
