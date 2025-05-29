<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['img_name', 'extension'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'images_brige', 'images_id', 'post_id');
    }
}
