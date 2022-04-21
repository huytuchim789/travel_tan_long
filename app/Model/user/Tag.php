<?php

namespace App\Model\user;

use App\Model\user\Blog;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

    public function blogs()
    {
    	return $this->belongsToMany(Blog::class, 'blog_tags');
    }
}
