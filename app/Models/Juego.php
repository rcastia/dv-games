<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
  protected $fillable = [
    'nombre',
    'descripcion',
    'precio',
    'consola_id',
    'formato_id',
];

public static $rules = [

        'nombre' => 'required|max:100',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
        'consola_id' => 'required',
        'formato_id' => 'required'
];

public static $errorMessages = [

      'nombre.required' => 'Ingrese el titulo del videojuego, por favor.',
      'nombre.max' => 'El titulo tiene que tener :max caracteres máximo.',
      'descripcion.required' => 'Ingrese la descripción del videojuego, por favor.',
      'precio.required' => 'Ingrese el precio del videojuego, por favor.',
      'precio.numeric' => 'El valor del precio tiene que ser numérico.',
      'consola_id.required' => 'Ingrese la consola del videojuego, por favor.',
      'formato_id.required' => 'Ingrese el formato del videojuego, por favor.'
];

}
