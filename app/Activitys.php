<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitys extends Model
{
    //
     protected $fillable = [
        	'intervaltime',
            'activityText',
            'activityDate'
    ];
}
