<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecine extends Model
{
    protected $fillable = ['name', 'quantity', 'description', 'clinic_id'];
}
