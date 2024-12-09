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
        $blogs = Blog::latest()->paginate(4);
        $title = 'Home';

        return view('index', compact('blogs', 'title', 'majors'));
    }

    // Show a single blog post
    public function show(Blog $blog)
    {
        return view('blog', compact('blog'));
    }
}
