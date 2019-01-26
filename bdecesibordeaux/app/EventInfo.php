<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventInfo extends Model
{
	public $timestamps = false;
    protected $table = 'eventinfo';

     protected $fillable = [
        'date', 'price', 'location'
    ];
}
