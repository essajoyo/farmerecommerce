<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'post_id', 'is_like'];
    public function post()
{
    return $this->belongsTo(Post::class, 'post_id', 'post_id'); // tell Laravel to use 'post_id'
}

public function user() {
    return $this->belongsTo(User::class);
}



}
