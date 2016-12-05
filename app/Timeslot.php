<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dutyday;
use App\Appointment;
class Timeslot extends Model
{
    protected $fillable = ['slot', 'reserved', 'dutyday_id', 'user_id', 'clinic_id'];

    // Relationships
    public function dutyday()
    {
        return $this->belongsTo('Dutyday');
    }

    public function appointments()
    {
        return $this->hasMany('Appointment', 'timeslot_id', 'id');
    }
}
