<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user(){
        return $this->belongsTo('App\Model\user\User');
    }
    public function tour(){
        return $this->belongsTo('App\Model\user\Tour');
    }
    public function contact(){
        return $this->belongsTo('App\Model\user\Contact');
    }
  
}
