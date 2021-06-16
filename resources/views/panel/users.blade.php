@extends('layouts.web')

@section('title', 'Panel de Administración - Usuarios')

@section('content')

<section class="text-gray-600 ">
  <div class="container px-5 py-12 mx-auto">
    <div class="w-full mx-auto overflow-auto lg:w-2/3">

      @if(Session::has('success_message'))
      <div class="w-10/12 container items-center px-5 py-0 lg:px-20 m-auto">
        <div class="w-full text-white border rounded-lg shadow-xl bg-green-500">
          <div class="flex items-center justify-between px-6 py-4 mx-auto ">
            <div class="flex">
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 icon icon-tabler icon-tabler-circle-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M9 12l2 2l4 -4"></path>
              </svg>
              <p class="text-md font-semibold tracking-wide ">
                {{ Session::get('success_message') }}
              </p>
            </div>
            <button class="p-1 transition-colors duration-200 transform rounded-md hover:bg-opacity-25 hover:bg-blueGray-600 focus:outline-none" type="button" aria-label="Close" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M10 10l4 4m0 -4l-4 4"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      @endif

      <a href="#" class="w-auto px-4 py-2 my-3 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-400 float-right cursor-pointer">
        Nuevo Usuario</a>
      <a href="{{ route('panel.panel') }}" class="w-auto px-4 py-2 my-3 mx-3 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-400 float-right cursor-pointer">
        Ver Juegos</a>

      <table class="w-full text-left whitespace-no-wrap table-auto">
        <thead>
          <tr>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> ID</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Username</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Nombre</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Apellido</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> Creado</th>
            <th class="px-4 py-2 text-sm text-center font-medium tracking-widest text-gray-500 bg-gray-200 title-font"> </th>
          </tr>
        </thead>
        <tbody class=" divide-y divide-light-blue-600">

          @if($users->count() > 0)
            @foreach($users as $user)
              <tr class="items-center">
                <td class="px-4 py-2 text-black text-center font-bold bg-gray-200">{{ $user->id }}</td>
                <td class="pl-4 py-2 text-black text-center font-bold bg-gray-50">{{ $user->username }}</td>
                <td class="px-4 py-2 text-black text-center bg-gray-50">{{ $user->name }}</td>
                <td class="px-4 py-2 text-black text-center bg-gray-50">{{ $user->surname }}</td>
                <td class="px-4 py-2 text-black text-center bg-gray-50">{{ $user->created_at }}</td>
                <td class="px-4 py-2 text-lg bg-gray-50">
                  <button role="button" class="px-4 py-1 mx-auto my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-400 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Editar</button>
                  
                  <form action="#" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="1">
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