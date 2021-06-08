<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;

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

//Panel
Route::prefix('/panel')->name('panel.')->group(function() {
  Route::get('/', [PanelController::class, 'panel'])->name('panel');
  Route::get('/create', [PanelController::class, 'createpage'])->name('createpage');
  Route::post('/create', [PanelController::class, 'create'])->name('create');
  Route::get('/{juego}/editar', [PanelController::class, 'editpage'])->name('editpage');
  Route::put('/{juego}/editar', [PanelController::class, 'edit'])->name('edit');
  Route::delete('/delete', [PanelController::class, 'delete'])->name('delete');
});
