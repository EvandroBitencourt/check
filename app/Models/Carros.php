<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'marca',
        'modelo',
        'anomodelo',
        'versao',
        'cambio',
        'combustivel',
        'direcao',
        'motor',
        'tipoveiculo',
        'km',
        'portas',
        'finalplaca',
        'airbag',
        'alarme',
        'arcondicionado',
        'travaeletrica',
        'vidroeletrico',
        'som',
        'sensorre',
        'camerare',
        'blindado',
        'cor',
        'aceitatrocas',
        'financiado',
        'ipva',
        'multas',
        'leilao',
        'unicodono',
        'preco',
        'contato',
        'tempo',
        'obs',
        'status',
        'id_compra',
    ];

    
}
