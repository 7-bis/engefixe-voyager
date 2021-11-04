<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Traits\Resizable;

class Obra extends Model
{
    use Resizable;
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
