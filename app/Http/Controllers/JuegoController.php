<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Juego;
use App\Models\Consola;
use App\Models\Formato;

class JuegoController extends Controller
{
    public function show(string $id) {
        try {
            $juego = Juego::findOrFail($id);
            return view('game.show')->with([
                'juego' => $juego
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect(route('home'))->withErrorMessage("El videojuego con el id: $id no ha sido encontrado.");
        }
        
    }

    public function create(Request $request)
    {
        $request->validate(Juego::$rules, Juego::$errorMessages);

        Juego::create($request->only(['nombre', 'descripcion', 'precio', 'consola_id', 'formato_id']));

        return redirect(route('panel.panel'))
            ->withSuccessMessage('El juego ha sido creado exitosamente.');
    }

    public function edit(Request $request, Juego $juego)
    {
       $request->validate(Juego::$rules, Juego::$errorMessages);

        $juego->update($request->only(['nombre', 'descripcion', 'precio', 'consola_id', 'formato_id']));

        return redirect(route('panel.panel'))
            ->withSuccessMessage('El juego ha sido editado exitosamente.');
    }

    public function delete(Request $request) {
        
        $juego = Juego::find($request->get('id'));
        $juego->delete();

        return redirect(route('panel.panel'))
            ->withSuccessMessage('El juego "' . $juego->nombre . '" ha sido eliminado exitósamente.');
    }
}
