<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    protected $fillable = [
        'medico_id',
        'paciente_id',
        'data_consulta'
    ];
}
