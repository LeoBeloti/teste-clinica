<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillable = [
        'nome',
        'data_nasc',
        'cpf'
    ];
}
