<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use TCG\Voyager\Traits\Resizable;

class Diario extends Model
{
    use Resizable;

    public function obra()
    {
        return $this->belongsTo(SysObra::class);
    }

    public function scopeDaObra($query)
    {
        return $query;
        // return dd($query);
        // return $query->where('sys_obra_id',1);
    }
}
