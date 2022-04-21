<?php

namespace App\Model\user;

use App\Model\user\Category;
use App\Model\user\Tag;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'image', 'status', 'like', 'dislike'];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class, 'blog_tags')->withTimestamps();
    }

    public function categories()
    {
    	return $this->belongsToMany(Category::class, 'blog_categories')->withTimestamps();
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

}
