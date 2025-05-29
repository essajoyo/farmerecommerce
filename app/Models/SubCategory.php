<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{   
    protected $table = 'sub_categories';
    protected $fillable = ['category_id', 'post_name'];

    // Relation to posts via pivot table 'conects_category'
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'conects_category', 'subcategory_id', 'post_id');
    }

    // Relation to category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); 
    }


}
