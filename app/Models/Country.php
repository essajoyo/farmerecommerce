<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'country_id';
    public $timestamps = false;

    protected $fillable = ['country_name'];

    public function states()
    {
        return $this->hasMany(State::class, 'country_id_fk', 'country_id');
    }
}
