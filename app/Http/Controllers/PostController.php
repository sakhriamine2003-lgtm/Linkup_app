<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\View\View;

class PostController extends Controller
{
 public function index()
 {

 $posts = Post::with('user') ->get();
 return view('feed', compact('posts'));
 }



















public function create(){
    return view('CreePost');
}
public function store(Request $request){
    // dd($request);
$request->validate(
   [ 'content'=>'required',]
);
$post = new Post();
$post->user_id=$request->user()->id;
$post->content=$request->content;
$post->save();
return redirect('/feed');
}

}
