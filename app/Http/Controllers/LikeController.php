<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
class LikeController extends Controller
{


public function  AddLike(Post $post)
{
    Like::firstOrCreate([
        'user_id' => auth()->$post->id(),
        'post_id' => $post->id,
        ]);

        return back()

;}
}

