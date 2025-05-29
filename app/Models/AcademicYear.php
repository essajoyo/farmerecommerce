<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\AcademicYear as Authenticatable;
use Illuminate\Notifications\Notifiable;
class AcademicYear extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
}
