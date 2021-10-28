<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysObra extends Model
{
    use HasFactory;

    protected $table = 'sys_obra';

    public function diarios()
    {
        return $this->hasMany(Diario::class);
    }
}
