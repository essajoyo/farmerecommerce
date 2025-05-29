<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $primaryKey = 'city_id';
    public $timestamps = false;

    protected $fillable = ['city', 'state_id_fk'];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id_fk', 'state_id');
    }
}
