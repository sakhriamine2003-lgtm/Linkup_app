<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class ProfilController extends Controller
{
    //

  public function  AffichageProfil(Post $post){
    $posts=post::with('user')->get();
        return view('Profile' ,compact('posts'));
    }
};


