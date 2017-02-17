<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Hospital extends Model
{
    protected $fillable = ['name', 'location', 'quota_per_day', 'is_activated'];

    public function employees(){
        return $this->hasMany('App\Employee');
    }

    public function number(){
    	return $this->hasMany('App\Numbering');
    }
}
