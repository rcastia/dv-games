<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
