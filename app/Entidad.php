<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{

    protected $table    = 'entities';
    protected $fillable = ['id', 'name', 'address', 'phone_number', 'website', 'email'];

    public function quejas()
    {

        return $this->hasMany('App\Queja');
    }

}
