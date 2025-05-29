<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $primaryKey = 'state_id';
    public $timestamps = false;

    protected $fillable = ['state_name', 'country_id_fk'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id_fk', 'country_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'state_id_fk', 'state_id');
    }
}
