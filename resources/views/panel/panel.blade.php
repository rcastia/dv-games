@extends('layouts.web')

@section('title', 'Panel de Administración')

@section('content')

<section class="text-gray-600 ">
  <div class="container px-5 py-12 mx-auto">
    <div class="w-full mx-auto overflow-auto lg:w-2/3">



      <a href="{{ route('panel.create') }}" class="w-auto px-6 py-2 my-3 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-400 float-right cursor-pointer">Nuevo Juego</a>

      <table class="w-full text-left whitespace-no-wrap table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> ID</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Nombre</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Precio</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Consola</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Formato</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> </th>
          </tr>
        </thead>
        <tbody class=" divide-y divide-light-blue-600">

          @if($juegos->count() > 0)
            @foreach($juegos as $juego)
              <tr class="items-center">
                <td class="px-4 py-2 text-black text-center font-bold bg-gray-200">{{ $juego->id }}</td>
                <td class="pl-4 py-2 text-black font-bold bg-gray-50">{{ $juego->nombre }}</td>
                <td class="px-4 py-2 text-black text-center bg-gray-50">${{ $juego->precio / 100 }}</td>
                <td class="px-4 py-2 text-black text-center bg-gray-50">{{ $juego->consola_id }}</td>
                <td class="px-4 py-2 text-black text-center bg-gray-50">{{ $juego->formato_id }}</td>
                <td class="px-4 py-2 text-lg bg-gray-50">
                  <button onclick="window.location.href='{{ route('panel.editpage', ['juego' => $juego->id]) }}'" role="button" class="px-4 py-1 mx-auto my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-400 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Editar</button>
                  
                  <form action="{{ route('panel.delete') }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $juego->id }}">
                  <button role="button" class="px-4 py-1 mx-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-red-600 rounded-lg hover:bg-red-400 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Borrar</button>
                  </form>

                </td>
              </tr>
            @endforeach
          @endif

        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection