<?php

namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'names', 'email','password','phone','idnumber','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relationships
     */
    public function patient(){
        return $this->hasOne('App\Patient');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function prescriptions()
    {
        return $this->hasMany('App\Prescription');
    }
    public function employee(){
        return $this->hasOne('App\Employee');
    }
}
