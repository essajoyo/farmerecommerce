<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $table = 'post_types';
    protected $primaryKey = 'post_type_id'; 
    public $timestamps = true;

    protected $fillable = [
        'post_type',
    ];
}
