<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class PanelController extends Controller
{
    public function panel() 
    {
        $juegos = Juego::all();
        return view('panel/panel')
        ->with([
            'juegos' => $juegos
            ]);
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
