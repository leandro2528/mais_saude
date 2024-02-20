<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'endereco',
        'telefone',
        'sexo_id',
        'data_nascimento',
        'gruposangue_id'
    ];

    public function sexo() {
        return $this->belongsTo(Sexo::class);
    }

    public function gruposangue() {
        return $this->belongsTo(Gruposangue::class);
    }
}
