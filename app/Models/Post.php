<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'summary', 'description', 'active', 'issue_date', 'post_type_id', 'user_id'];

    public function subcategories()
    {
        return $this->belongsToMany(SubCategory::class, 'conects_category', 'post_id', 'subcategory_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 // In Post.php model



 

    

    public function files()
    {
        return $this->hasMany(File::class, 'post_id', 'post_id');
    }

    
        public function postType()
    {
        return $this->belongsTo(PostType::class, 'post_type_id', 'post_type_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'images_brige', 'post_id', 'images_id');
    }

  

    public function likes()
{
    return $this->hasMany(Like::class,'post_id');
}

// Check if the current user liked this post
public function isLikedByUser($userId)
{
    return $this->likes()->where('user_id', $userId)->exists();
}



   


}
