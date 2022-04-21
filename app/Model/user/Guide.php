<?php

namespace App\Model\user;

use App\Model\user\Tour;
use App\Model\user\TourSpecial;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    public function tours()
    {
    	return $this->belongsToMany(Tour::class, 'guide_tours')->withTimestamps();
    }

    public function tour_specials()
    {
    	return $this->belongsToMany(TourSpecial::class, 'guide_tour_specials')->withTimestamps();
    }
}
