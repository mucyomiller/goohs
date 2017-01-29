<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Timeslot;
class Dutyday extends Model
{
	protected $fillable = ['day', 'start', 'end', 'user_id', 'clinic_id'];

    public static function makeSlots($start_time, $end_time, $day_id, $emp_id){
    $fifteen_mins  = 15 * 60;
    $start = strtotime($start_time);
    $end = strtotime($end_time);

        while($start <= $end){
            $timeslot = new Timeslot();
            $timeslot->slot = date("H:i:s", $start);
            $timeslot->save();
            $timeslot->dutyday_id = $day_id;
            $timeslot->save();
            $timeslot->user_id = $emp_id;
            $timeslot->save();
            $start += $fifteen_mins;
        }
    }

    public static function updateSlots($start_time, $end_time, $day_id){
        $fifteen_mins  = 15 * 60;
        $start = strtotime($start_time);
        $end = strtotime($end_time);

        Timeslot::where('dutyday_id', '=', $day_id)->delete();

        while($start <= $end){
            $timeslot = new Timeslot();
            $timeslot->slot = date("H:i:s", $start);
            $timeslot->save();
            $timeslot->dutyday_id = $day_id;
            $timeslot->save();
            $start += $fifteen_mins;
        }
    }

    // Relationships
	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function timeslots()
    {
        return $this->hasMany('App\Timeslot');
    }
}
