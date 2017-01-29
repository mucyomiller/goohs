<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    public $timestamps =false;
    protected $table ='cells';

    protected $fillable =['cell_name','sector_id'];

    /*
    * @Author: mucyomiller
    *  Relationships
    */

    public function sector()
    {
          return $this->belongsTo('App\Sector');
    }
    
    /*
    *  @Author: mucyomiller
    *  Cell has Patients
    */
    public function patients(){
      return $this->hasMany('App\Patient');
    }

}
