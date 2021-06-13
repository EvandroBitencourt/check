<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_carros',
        'principal',
        'adicional01',
        'adicional02',
        'adicional03',
        'adicional04',
        'adicional05',
    ];

    
}
