<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\JuegoController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\AuthMiddleware;

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

Route::get('/', [HomeController::class, 'homepage'])->name('home')->middleware(AuthMiddleware::class);
Route::post('/purchase', [HomeController::class, 'purchase'])->name('home.purchase');

//Autenticación
Route::prefix('/auth')->name('auth.')->group(function() {
  Route::get('/login', [AuthController::class, 'loginForm'])->name('loginform')->middleware(GuestMiddleware::class);
  Route::post('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Panel
Route::prefix('/panel')->name('panel.')->group(function() {
  Route::get('/', [PanelController::class, 'panel'])->name('panel')->middleware(AuthMiddleware::class);
  Route::get('/createpage', [PanelController::class, 'createpage'])->name('createpage')->middleware(AuthMiddleware::class);
  Route::get('/{juego}/editpage', [PanelController::class, 'editpage'])->name('editpage')->middleware(AuthMiddleware::class);
});

//Juegos
Route::prefix('/game')->name('game.')->group(function() {
  Route::get('/{juego}', [JuegoController::class, 'show'])->name('show')->middleware(AuthMiddleware::class);
  Route::post('/create', [JuegoController::class, 'create'])->name('create');
  Route::put('/{juego}/edit', [JuegoController::class, 'edit'])->name('edit');
  Route::delete('/delete', [JuegoController::class, 'delete'])->name('delete');
});
