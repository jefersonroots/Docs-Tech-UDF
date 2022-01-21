<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'dtNascimento',
        'cpf',
        'rgm',
        'email',
        'endereco',
        'telefone',
        'usuario',
        'senha',
        /*'curso', */
    ];

    protected $table = 'aluno';
}
