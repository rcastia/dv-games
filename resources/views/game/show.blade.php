@extends('layouts.web')

@section('title', $juego->nombre)

@section('content')
<div class="container items-center px-5 pt-12 pb-20 mx-auto lg:px-20">
  <div class="w-full mx-auto text-blueGray-500 border rounded-lg shadow-xl lg:w-1/2" aria-hidden="false" aria-describedby="modalDescription" role="dialog">
    <div class="flex flex-col w-full p-10 mx-auto mb-12 text-left">
      <p class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">ID: {{ $juego->id }}</p>
      <h2 class="mb-8 text-2xl font-semibold leading-none tracking-tighter text-black title-font">{{ $juego->nombre }}</h2>
      <p><strong>Precio:</strong> ${{ $juego->precio / 100 }}</p>
      <ul>
        <li><strong>Consola:</strong> {{ $juego->consola->nombre }}</li>
        <li><strong>Formato:</strong> {{ $juego->formato->tipo }}</li>
      </ul>
      <p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">{{ $juego->descripcion }}</p>
      <div class="flex mt-4">
        <form class="mx-auto pt-3" action="{{ route('home.purchase') }}" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $juego->id }}">
        <button role="button" class="w-full px-16 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform border-black rounded-md bg-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-gray-700 "> Comprar </button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footer')
<div class="container items-center m-auto ">
  <footer class="text-gray-700 transition duration-500 ease-in-out transform bg-white border rounded-lg ">
    <div class="flex flex-col flex-wrap justify-center p-5 md:flex-row">
      <nav class="flex flex-wrap items-center justify-center w-full mx-auto mb-6 text-base nprd">
        <a href="#" class="px-4 py-1 mr-1 text-base text-gray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Home</a>
        <a href="#" class="px-4 py-1 mr-1 text-base text-gray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Panel</a>
      </nav>
      <span class="inline-flex justify-center w-full mx-auto mt-2 mr-2 sm:ml-auto sm:mt-0">
        <a class="text-blue-500 hover:text-black">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-blue-500 hover:text-black">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-blue-500 hover:text-black">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-blue-500 hover:text-black">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
            </path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
    <div class="w-full px-8 mt-4 rounded-b-lg bg-gray-50">
      <div class="container inline-flex flex-col flex-wrap items-center px-5 py-6 mx-auto sm:flex-row">
        <p class="mx-auto text-sm text-center text-black sm:text-left "> © Roberto Castia - Aplicaciones Enriquecidas - 2021 </p>
      </div>
    </div>
  </footer>
</div>
@endsection
