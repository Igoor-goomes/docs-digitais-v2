<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'log';
    protected $fillable = [
        'user_id',
        'operacao_id',
        'tp_objeto',
        'ds_objeto',
        'dt_log'
    ];
}
