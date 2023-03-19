<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'funcionario',
        'aluno',
        'data_inicio',
        'data_fim',
        'custo'
    ];
}
