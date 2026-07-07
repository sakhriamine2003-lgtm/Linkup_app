<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;



class CommentController extends Controller
{
    public function AjouteCommenter(Post $post)
{
    return view('commenter', compact('post'));
}



public function SaveComment(Request $request, Post $post)
{
    // dd($request);
    $request->validate([
        'content' => 'required|string|max:500',

    ]);

    Comment::create([
        'post_id' => $post->id,
        'user_id' => $request->user()->id,
        'conntenu' => $request->content,
    ]);

    return redirect()->route('feed');
}



public function AffCommenter($id)
{
    $post = Post::with(['user', 'comments.user'])->findOrFail($id);

    return view('AffCommenter', compact('post'));
}

}
