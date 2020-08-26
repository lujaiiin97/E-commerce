<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    Protected $guard_name = 'merchant';
    protected $fillable = [
    'Email', 'Password',
    ];

}
