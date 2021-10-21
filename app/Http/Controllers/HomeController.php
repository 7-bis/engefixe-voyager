<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Depoimento;
use App\Http\Controllers\Controller;
use App\Models\Obra;
use App\Parceiro;
use App\Servico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['testimonials'] = Depoimento::all();
        $data['constructions'] = Obra::with('categories')->get();
        $data['services'] = Servico::all();
        $data['partners'] = Parceiro::all();
        $data['banners'] = Banner::all();
        $data['latest_constructions'] = Obra::latest()->take(2)->get();
        return view('home',$data);
    }
}
