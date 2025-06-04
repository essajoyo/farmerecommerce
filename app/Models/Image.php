<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['img_name', 'extension'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'images_brige', 'images_id', 'post_id');
    }

    public function getPathAttribute()
    {
        return 'storage/' . $this->img_name;
    }

    public function images()
{
    return $this->hasMany(ProductImage::class);
}

}
