<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Clinic extends Model
{
    protected $fillable = ['name', 'address', 'is_activated'];

    public function users(){
        return $this->hasMany('App\User');
    }
}
