<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesBrige extends Model
{
     protected $table = 'images_brige';
    protected $fillable = ['post_id', 'images_id'];
}
