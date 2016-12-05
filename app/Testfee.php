<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testfee extends Model
{
    protected $fillable = ['test_fee', 'fee_note', 'clinic_id'];
}
