<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function booking(){
        return $this->hasOne('App\Model\user\Booking');
    }
}