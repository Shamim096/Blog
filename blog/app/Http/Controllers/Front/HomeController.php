<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home.home', [
            'blogs' => Blog::orderBy('id', 'DESC')->take(3)->get(),
        ]);
    }
    public function blogs()
    {
        return view('front.blogs.blog', [
            'blogs' => Blog::latest()->get(),
        ]);
    }

    public function blogDetails ($id)
    {
        return view('front.blogs.details', [
            'blog'  => Blog::find($id),
            'blogCategories'  => BlogCategory::all(),
        ]);
    }
}
