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
}
