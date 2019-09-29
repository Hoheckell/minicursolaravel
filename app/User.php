<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{    
    use Notifiable;
    
    protected $table='users';
    protected $fillable=[
        'password',
        'email'
    ];
    protected $dates=['created_at','updated_at'];
}
