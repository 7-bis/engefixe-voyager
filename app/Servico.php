<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Servico extends Model
{
    public function categoria()
    {
        return $this->belongsTo(CategoriaServico::class, 'category_id', 'id');
    }
}
