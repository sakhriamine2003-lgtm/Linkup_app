<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

protected $fillable = [
    'conntenu',
    'user_id',
    'post_id',
];


public function user()
{
    return $this->belongsTo(User::class);
}

public function post()
{
    return $this->belongsTo(Post::class);
}

}
