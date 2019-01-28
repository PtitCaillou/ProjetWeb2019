<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
	 public $timestamps = false;
    protected $table ='basket';


     protected $fillable = [
        'product_id', 'user_id', 'quantity', 'status', 
    ];
}
