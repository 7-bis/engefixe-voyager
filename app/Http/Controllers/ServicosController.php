<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Servico;
use TCG\Voyager\Models\Category;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index() {
        $data['categories'] = Category::all();
        $data['services'] = Servico::all();
        $data['latest_constructions'] = Servico::latest()->take(2)->get();
        return view('servicos',$data);
    }
}
