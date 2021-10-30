<?php

namespace App\Http\Controllers\Admin;

use App\Diario;
use App\Http\Controllers\Controller;
use App\SysObra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObrasController extends Controller
{
    public function show($id) {

        $sysObra = SysObra::with('diarios')->find($id);
       
    return $sysObra;
        
    }
}
