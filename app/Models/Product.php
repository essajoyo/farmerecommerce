<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product', 'stock', 'feature_image', 'description', 'price', 'is_feature', 'is_shipping', 'status'
    ];

  

    public function images()
{
    return $this->hasMany(ProductImage::class, 'product_id');
}

}
