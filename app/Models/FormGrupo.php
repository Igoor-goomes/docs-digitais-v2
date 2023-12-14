<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormGrupo extends Model
{
    use HasFactory;

    protected $table = 'form_grupo';
    protected $fillable = [
        'formulario_id',
        'grupo_usuario_id',
        'form_grupo_incluir',
        'form_grupo_atualizar',
        'form_grupo_excluir'
    ];
}
