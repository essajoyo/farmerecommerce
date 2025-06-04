<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'name',
    'email',
    'billing_address',
    'shipping_address',
    'cart_id',
    'city_id',
    'method_id',
    'discount_code',
    
];
}
