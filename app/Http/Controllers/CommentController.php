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



public function SaveComment(Request $r, Post $post)
{
    $r->validate([
        'conntenu' => 'required|string|max:500',
    ]);
    Comment::create([
        'post_id' => $post->id,
        'user_id' => $r->user()->id,
        'conntenu' => $r->conntenu,
    ]);

    return redirect()->route('feed');
}


public function AffCommenter($id)
{
    $post = Post::with(['user', 'comments.user'])->findOrFail($id);
    return view('AffCommenter ' ,compact('post'));
}

}
