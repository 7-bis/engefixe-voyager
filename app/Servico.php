<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Servico extends Model
{
    use Resizable;

    public function categoria()
    {
        return $this->belongsTo(CategoriaServico::class, 'category_id', 'id');
    }
}
