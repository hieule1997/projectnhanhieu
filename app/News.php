<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
     protected $fillable = [
        	 'newsTitle',
             'linkNews',
             'newsImage',
             'newsInfor',
             'newsDate',
             'linkShow',
    ];
}
