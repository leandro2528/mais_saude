<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'endereco',
        'telefone',
        'departamento_id'
    ];

    public function departamento() {
        return $this->belongsTo(Departamento::class);
    }
}
