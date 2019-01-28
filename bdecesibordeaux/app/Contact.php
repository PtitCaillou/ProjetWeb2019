<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'title', 'content', 'name', 'email', 'to_email'
    ];
}
