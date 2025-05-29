<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'country',
        'state',
        'city',
        'profession',
        'expertise_level',
        'image',
    ];

    public function location()
    {
        return $this->hasOne(Location::class, 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'userrole', 'user_id', 'role_id');
    }
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

public function likes() {
    return $this->hasMany(Like::class);
}


}
