<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carro extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'placa',
        'motorista_id'
    ];

    // Relacionamento.
    public function motorista()
    {
        return $this->belongsTo(Motorista::class);
    }
}
