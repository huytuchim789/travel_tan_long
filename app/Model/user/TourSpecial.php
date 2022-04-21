<?php

namespace App\Model\user;

use App\Model\user\Guide;
use Illuminate\Database\Eloquent\Model;

class TourSpecial extends Model
{
    public function guides()
    {
    	return $this->belongsToMany(Guide::class, 'guide_tour_specials');
    }
}
