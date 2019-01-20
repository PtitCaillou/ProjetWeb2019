<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path', 'description', 'author'
    ];
}
