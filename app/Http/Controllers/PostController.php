<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
 public function index()
 {

 $posts = Post::with('user') ->get();
 return view('feed', compact('posts'));
 }
}
