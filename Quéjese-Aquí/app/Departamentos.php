<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table    = 'departments';
    protected $fillable = ['id', 'entity_id', 'name'];

    public function entidades()
    {

        return $this->belongsTo('App\Models\Entidades');
    }

    public function quejas()
    {

        return $this->belongsTo('App\Models\Quejas');
    }
}
