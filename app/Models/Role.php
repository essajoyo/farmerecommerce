<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles'; 
    protected $primaryKey = 'role_id'; 
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'userrole', 'role_id', 'user_id');
    }
    

}
