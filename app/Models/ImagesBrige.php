<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageBridge extends Model
{
    protected $table = 'image_bridge';

    protected $fillable = ['post_id', 'images_id'];
}
