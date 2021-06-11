<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use App\Models\Consola;
use App\Models\Formato;

class PanelController extends Controller
{
    public function panel() 
    {
        //$juegos = Juego::all();
        $juegos = Juego::with(['consola', 'formato'])->get();
        return view('panel/panel', compact('juegos'));
    }

    public function createpage()
    {
        return view('panel.create');
    }

    public function editpage(Juego $juego)
    {
        return view('panel.edit', compact('juego'));
    }
}
