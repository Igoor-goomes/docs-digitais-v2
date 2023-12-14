<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documento';
    protected $fillable = [
        'no_documento',
        'tp_documento_id',
        'setor_id',
        'filial_id',
        'doc_armario',
        'doc_gaveta',
        'doc_pasta',
        'dt_documento',
        'dt_registro',
        'user_id'
    ];
}
