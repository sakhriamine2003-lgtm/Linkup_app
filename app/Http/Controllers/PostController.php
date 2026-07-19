<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
 public function index()
 {

 $posts = Post::with('user') ->get();
 return view('feed', compact('posts'));
 }



// les  challenges -------------------------->  :

// Sélectionner tous les utilisateurs actifs.

// Query Builder ()   kant3amlo  m3a db  derctement bla mndkhllo  les modles:


public function afficherNom()
{
    $users = DB::table('users')
    ->get();

    return view('test', compact('users'));
}


function  afficherInfo(){
    $posts = Post::with('user')
    ->get();
    return view('test' , compact('posts'));

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
