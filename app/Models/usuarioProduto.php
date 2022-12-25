<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarioProduto extends Model
{
    protected $table = 'pedido';
    protected $fillable = [
        'user_id', 'produto_id',
    ];
    use HasFactory;
}
