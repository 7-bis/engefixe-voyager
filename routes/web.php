<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/obras', [ObraController::class,'index']);
Route::get('/obras/{id}', [ObraController::class,'show'])->name('obras.show');
Route::get('/servicos', [ServicosController::class,'index']);
Route::get('/contato', [ContatoController::class,'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/diarios/{id}/obras',[Admin\ObrasController::class, 'show'])->name('voyager.diarios.obra');
});
