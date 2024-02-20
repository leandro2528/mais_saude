<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infermeira extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'endereco',
        'telefone'
    ];
}
