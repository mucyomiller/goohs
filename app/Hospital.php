<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Hospital extends Model
{
    protected $fillable = ['name', 'location', 'is_activated'];

    public function employees(){
        return $this->hasMany('App\Employee');
    }
}
