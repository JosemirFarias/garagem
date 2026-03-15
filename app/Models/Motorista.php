<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motorista extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'cpf',
        'cnh',
        'data_nascimento',
        'validade_cnh',
        'telefone'
    ];
}
