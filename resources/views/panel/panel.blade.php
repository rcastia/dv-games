@extends('layouts.web')

@section('content')

<h1 class="text-4xl font-bold text-center py-4">PANEL</h1>

<section class="text-gray-600 ">
  <div class="container px-5 py-24 mx-auto">
    <div class="w-full mx-auto overflow-auto lg:w-2/3">
      <table class="w-full text-left whitespace-no-wrap table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Nombre:</th>
            <th class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Descripción:</th>
            <th class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Precio:</th>
            <th class="px-4 py-2 text-sm font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> </th>
          </tr>
        </thead>
        <tbody class=" divide-y divide-light-blue-600">
          <tr class="items-center">
            <td class="px-4 py-2 text-black font-bold bg-gray-50">Red Dead Redemption 2</td>
            <td class="px-4 py-2 text-black bg-gray-50">The Legend of Zelda: Breath of the Wild es un videojuego de acción-aventura de 2017 de la serie The Legend of Zelda, desarrollado por la filial Nintendo EPD en colaboración con Monolith Soft y publicado por Nintendo para las consolas Wii U y Nintendo Switch.</td>
            <td class="px-4 py-2 text-black bg-gray-50">$1500</td>
            <td class="px-4 py-2 text-lg bg-gray-50">
              <button role="button" class="px-6 py-2 mx-auto my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Editar</button>
              <button role="button" class="px-6 py-2 mx-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-red-600 rounded-lg hover:bg-red-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Borrar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection