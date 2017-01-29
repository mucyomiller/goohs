<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    protected $fillable = ['slot', 'reserved', 'dutyday_id', 'user_id', 'clinic_id'];

    // Relationships
    public function dutyday()
    {
        return $this->belongsTo('App\Dutyday');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment', 'timeslot_id', 'id');
    }
}
