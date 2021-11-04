<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CategoriaServico extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categoria_servicos';

    /**
     * @var array
     */
    protected $fillable = ['nome', 'created_at', 'updated_at', 'deleted_at', 'slug'];
}
