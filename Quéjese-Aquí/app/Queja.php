<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    protected $table    = 'complaints';
    protected $fillable = ['id', 'entity_id', 'department_id', 'problem', 'solution', 'available'];

    public function entidades()
    {

        return $this->belongsTo('App\Entidad');
    }

    public function user()
    {

        return $this->belongsTo('App\User');
    }

}
