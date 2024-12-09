<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use App\Models\Major;
use App\Models\Principal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $majors = Major::all();
        $posts = Post::latest()->paginate(4);
        $principal = Principal::whereNull('retire_date')->first();

        $title = 'Home';
        return view('index', compact('title', 'majors', 'posts', 'principal'));
    }
}
