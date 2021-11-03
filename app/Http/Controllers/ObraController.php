<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Category;
use App\Models\Obra;
use App\Models\Section;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    public function index() {
        $data['constructions'] = Obra::all();
        $data['categorias_obras'] = Category::all();
        $data['latest_constructions'] = Obra::latest()->take(2)->get();
        return view('obras',$data);
    }

    public function categoria($categoria_id = null) {
        $data['constructions'] = $categoria_id == null ? Obra::all() : Obra::where('category_id',$categoria_id)->get();
        $data['categorias_obras'] = Category::all();
        $data['latest_constructions'] = Obra::latest()->take(2)->get();
        return view('obras',$data);
    }

    public function show($id) {
        $data['latest_constructions'] = Obra::latest()->take(2)->get();
        $data['constructions_categories'] = $data['categories'] = Category::all();
        $data['construction'] = Obra::find($id);
        return view('obra-interna',$data);
    }
}
