<?php

namespace App\Http\Controllers;

use App\CategoriaServico;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Obra;
use App\Servico;
use TCG\Voyager\Models\Category;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function categoria($categoria_id = null) {
        $data['categories'] = CategoriaServico::all();
        $data['servicos'] = $categoria_id == null ? Servico::with('categoria')->get() : Servico::where('category_id',$categoria_id)->get();
        $data['latest_constructions'] = Servico::latest()->take(2)->get();
        return view('servicos',$data);
    }

    public function show($id) {
        $data['latest_constructions'] = Obra::latest()->take(2)->get();
        $data['categoria_servicos'] = CategoriaServico::all();
        $data['servico'] = Servico::find($id);
        return view('servico-interna',$data);
    }
}
