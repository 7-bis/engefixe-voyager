<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;

class Obra extends Model
{

    use HasFactory;

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
