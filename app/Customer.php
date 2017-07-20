<?php

namespace App;

use App\Models\Moloquent;


class Customer extends Moloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     *//*
    protected $hidden = [
        'password', 'remember_token',
    ];*/
}
