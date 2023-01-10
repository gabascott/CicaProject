<?php

use App\Http\Controllers\CicaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('cica');
});

Route::get('/api/cicak', [CicaController::class, 'index']);
Route::get('/api/cica/{id}', [CicaController::class, 'cicaKeres']);
Route::delete('/api/cica_torol/{id}', [CicaController::class, 'destroy']);
Route::patch('/api/cica_felvesz', [CicaController::class, 'ujCica']);