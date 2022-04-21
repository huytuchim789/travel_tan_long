<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
	/**
	 * Blog home page
	 */
    public function index()
    {
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'DESC')->paginate(9);
    	return view('user.pages.blog', compact('blogs'));
    }

    /**
     * Blog single page
     */
    public function singleBlog(Blog $blog)
    {
    	return view('user.pages.blog_details', compact('blog'));
    }
    
}
