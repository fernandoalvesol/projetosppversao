<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Site\SiteController;


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

//ROTA SITE
Route::get('/', [SiteController::class, 'index'])->name('site.index');


//ROTA PAINEL
Route::get('/painel', [PainelController::class, 'index'])->name('painel.index');

/**
 *
 * Route::get('/', function () {
    return view('welcome');
}); 
 * 
 */
