<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obra;
use App\Models\Section;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() {
        $constructions = Obra::all();
        $data['latest_constructions'] = $constructions->latest()->take(2)->get();
        return view('contato',$data);
    }
}
