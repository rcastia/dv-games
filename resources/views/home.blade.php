@extends('layouts.web')

@section('content')

<h1 class="text-4xl font-bold text-center py-4">JUEGOS</h1>

<section class="text-gray-700 ">
  <div class="container items-center px-5 py-12 lg:px-20 m-auto">
    <div class="flex flex-wrap items-center justify-center w-full gap-4">

      @if($juegos->count() > 0)
        @foreach($juegos as $juego)
          <div class="w-full xl:w-1/4 md:w-3/6">
            <div class="relative flex flex-col h-full p-8 transition duration-500 ease-in-out transform bg-white border rounded-lg shadow-xl">
              <h2 class="mb-4 text-sm font-medium tracking-widest text-black uppercase title-font"> {{ $juego->nombre }} </h2>
              <strong class="flex items-end text-xl font-black leading-none text-black lg:text-3xl ">
                <span>${{ $juego->precio / 100 }} </span>
              </strong>
              <p class="flex items-center mt-8 mb-2 text-base font-medium leading-relaxed text-gray-700">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-white rounded-full bg-black">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  </svg>
                </span>{{ $juego->consola_id }}
              </p>
              <p class="flex items-center mb-2 text-base font-medium tracking-tight text-gray-700">
                <span class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 mr-2 text-white bg-black rounded-full">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  </svg>
                </span>{{ $juego->formato_id }}
              </p>
              <button role="button" class="w-full px-4 py-2 mt-6 text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Ver más</button>
            </div>
          </div>
        @endforeach
      @endif

    </div>
  </div>
</section>

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