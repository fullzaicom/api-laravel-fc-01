<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'descricao', 'preco', 'categoria'];

    protected $hidden = [
        'deleted_at',
    ];
}
