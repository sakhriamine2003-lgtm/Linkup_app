<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
 protected $fillable = [
 'user_id',
 'content',
 ];



public function user()
 {
 return $this->belongsTo(User::class);
 }


 public function comments()
 {
 return $this->hasMany(comment::class);
 }


 public function like()
 {
 return $this->hasMany(Like::class);
 }

 }







