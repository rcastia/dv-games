<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Juego;

class HomeController extends Controller
{
    public function homepage() 
    {
        $juegos = Juego::all();
        return view('home')
        ->with([
            'juegos' => $juegos
        ]);
    }

    public function purchase(Request $request) 
    {
        $juego = Juego::find($request->get('id'));
        return redirect(route('home'))
        ->withSuccessMessage('El juego "' . $juego->nombre . '" ha sido comprado exitósamente.');

    }
}
