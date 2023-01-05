<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TiposServico extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tipos_servico';
    protected $fillable = [
        'descricao'
    ];
}
