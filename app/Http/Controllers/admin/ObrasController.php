<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SysObra;
use Illuminate\Http\Request;

class ObrasController extends Controller
{
    public function show($id) {
        $diarios = SysObra::with('diarios')->find($id);
        return $diarios;
    }
}
