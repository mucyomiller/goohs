<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['user_id','hospital_id','country','address','branch','note','status'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function hospital(){
    	return $this->belongsTo('App\Hospital');
    }
    public function records(){
    	return $this->hasMany('App\Record','employee_id','id');
    }
}
