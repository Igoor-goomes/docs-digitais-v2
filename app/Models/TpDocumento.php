<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpDocumento extends Model
{
    use HasFactory;

    protected $table = 'tp_documento';
    protected $fillable = [
        'no_tp_documento'
    ];
}
