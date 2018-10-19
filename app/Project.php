<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
     protected $fillable = [
        	'projectName',
            'projectImage',
            'projectTitle',
            'projectInfor',
            'projectText',
    ];
}
