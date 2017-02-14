<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['user_id','hospital_id','country','address','branch','note','status'];

    function user(){
    	return $this->belongsTo('App\User');
    }
    function hospital(){
    	return $this->belongsTo('App\Hospital');
    }
}
