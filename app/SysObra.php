<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class SysObra extends Model
{
    use Resizable;
    use HasFactory;

    protected $table = 'sys_obra';

    public function diarios()
    {
        return $this->hasMany(Diario::class);
    }
}
