<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
     protected $fillable = [
        	'name',
            'birthDay',
            'gender',
            'phoneNumber',
            'email',
            'address',
            'avatar',
            'position',
            'signature',
            'logo',
            'facebook',
            'google',
            'skype',
            'youtube',
    ];
}
