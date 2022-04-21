<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'phone', 'status', 'role'];

    public function roles()
    {
    	return $this->belongsToMany('App\Model\admin\Role');
    }

}
