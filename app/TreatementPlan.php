<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatementPlan extends Model
{
    protected $fillable  = [
    'record_id','treatments_plan'
    ];

    public function record(){
    	return $this->belongsTo('App\Record');
    }
}
