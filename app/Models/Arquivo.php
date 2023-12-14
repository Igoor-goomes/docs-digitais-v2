<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    use HasFactory;

    protected $table = 'arquivo';
    protected $fillable = [
        'documento_id',
        'arq_endereco',
        'arq_tipo'
    ];

}
