<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Major;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $majors = Major::all();
        $blogs = Blog::latest()->get();
        $title = 'Home';

        return view('posts', compact('blogs', 'title', 'majors'));
    }

    // Show a single blog post
    public function show(Blog $blog)
    {
        return view('blog', compact('blog'));
    }
}
