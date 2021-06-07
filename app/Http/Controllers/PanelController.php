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

    public function delete(Request $request) {
       // $request->validate([
         //   'id' => 'numeric|exists:posts,id'
        //]);
        
        $juego = Juego::find($request->get('id'));
        $juego->delete();

        return redirect(route('panel.panel'))
            ->withSuccessMessage('Juego (id: ' . $juego->id . ') deleted successfully!');
    }
}
