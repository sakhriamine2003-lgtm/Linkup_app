<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function AjouteCommenter()
    {
        return view('commenter');
    }



    public function SaveComment(Request $request)
    {
        $request->validate([
            'contenu' => 'required|string|max:500',
        ]);

        Comment::create([
            'contenu' => $request->contenu,
        ]);
        return redirect('feed');
    }
}
