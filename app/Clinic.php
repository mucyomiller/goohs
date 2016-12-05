<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Clinic extends Model
{
    protected $fillable = ['name', 'address', 'is_activated'];

    public function users(){
        return $this->hasMany('User');
    }

    public function admin(){
        return $this->hasOne('User')->where('role', 'Administrator');
    }
}
