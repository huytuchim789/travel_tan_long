<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function blogs()
    {
    	return $this->belongsToMany(Blog::class, 'blog_categories');
    }
}
