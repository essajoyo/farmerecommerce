<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'category'; 
     
    protected $fillable = [
        'user_id',
        'categoryName',
        'categoryImg',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //  public function subcategories()
    // {
    //     return $this->hasMany(Subcategory::class, 'category_id', 'id');
    // }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

   
}
