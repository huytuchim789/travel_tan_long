<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\Blog;
use App\Model\user\Category;
use App\Model\user\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->can('blogs.create')) {
            $tags = Tag::all();
            $categories = Category::all();
            return view('admin.blog.create', compact('tags', 'categories'));
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
        $blog = new Blog;
        $blog->image = $imageName;
        $blog->title = $request->title;
        if ($slug = $request->title) {
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string, "?"));
            }
            $slug = make_slug($slug);
            $blog->slug = trim($slug, "-");
        }
        $blog->body = $request->body;
        $blog->posted_by = Auth::user()->name;
        $blog->status = $request->status;
        $blog->save();
        $blog->tags()->sync($request->tags);
        $blog->categories()->sync($request->categories);
        

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('blogs.update')) {
            $blog = Blog::with('categories', 'tags')->where('id', $id)->first();
            $tags = Tag::all();
            $categories = Category::all();
            return view('admin.blog.edit', compact('blog', 'tags', 'categories'));
        }
        return redirect()->back();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $blog = Blog::find($id);

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
            $blog->image = $imageName;
        }        
        
        $blog->title = $request->title;
        if ($slug = $request->title) {
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string, "?"));
            }
            $slug = make_slug($slug);
            $blog->slug = trim($slug, "-");
        }
        $blog->body = $request->body;
        $blog->status = $request->status;
        $blog->tags()->sync($request->tags);
        $blog->categories()->sync($request->categories);
        $blog->save();

        return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->can('blogs.delete')) {
            Blog::where('id', $id)->delete();
            return redirect()->route('blog.index');
        }
        return redirect()->back();
    }
}
