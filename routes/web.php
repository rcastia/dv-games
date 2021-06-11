<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\JuegoController;

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

Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::post('/purchase', [HomeController::class, 'purchase'])->name('home.purchase');

//Panel
Route::prefix('/panel')->name('panel.')->group(function() {
  Route::get('/', [PanelController::class, 'panel'])->name('panel');
  Route::get('/createpage', [PanelController::class, 'createpage'])->name('createpage');
  Route::get('/{juego}/editpage', [PanelController::class, 'editpage'])->name('editpage');
});

//Juegos
Route::prefix('/game')->name('game.')->group(function() {
  Route::get('/{juego}', [JuegoController::class, 'show'])->name('show');
  Route::post('/create', [JuegoController::class, 'create'])->name('create');
  Route::put('/{juego}/edit', [JuegoController::class, 'edit'])->name('edit');
  Route::delete('/delete', [JuegoController::class, 'delete'])->name('delete');
});
