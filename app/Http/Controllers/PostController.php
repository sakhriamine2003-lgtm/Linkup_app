<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
 public function index()
 {

 $posts = Post::with('user') ->get();
 return view('feed', compact('posts'));
 }



public function regst()
{
    return view('login.register');
}
}
