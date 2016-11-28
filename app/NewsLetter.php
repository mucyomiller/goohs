<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newsletters';
}
