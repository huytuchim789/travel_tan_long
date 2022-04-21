<?php

namespace App\Model\user;

use App\Model\admin\TourGuide;
use App\Model\user\Guide;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function guides()
    {
    	return $this->belongsToMany(Guide::class, 'guide_tours');
    }

}
