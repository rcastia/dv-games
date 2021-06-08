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

    public function create(Request $request)
    {
       // $request->validate(Juego::$rules, Juego::$errorMessages);

        Juego::create($request->only(['nombre', 'descripcion', 'precio', 'consola_id', 'formato_id']));

        return redirect(route('panel.panel'))
            ->withSuccessMessage('El juego se creó exitosamente.');
    }

    public function editpage(Juego $juego)
    {
        return view('panel.edit', compact('juego'));
    }

    public function edit(Request $request, Juego $juego)
    {
       // $request->validate(Juego::$rules, Juego::$errorMessages);

        $juego->update($request->only(['nombre', 'descripcion', 'precio', 'consola_id', 'formato_id']));

        return redirect(route('panel.panel'))
            ->withSuccessMessage('El juego se editó exitosamente.');
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
