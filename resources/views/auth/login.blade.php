@extends('layouts.web')

@section('title', 'Inicia Sesión')

@section('content')

<section class="text-blueGray-700 ">
  <form action="{{ route('auth.login') }}" method="post">
    @csrf
    <div class="container items-center px-5 py-12 lg:px-20 mx-auto">
      <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
        <div class="relative mt-4">
          <label for="username" class="text-base leading-7 text-blueGray-500">Nombre</label>
          <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Nombre" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
          @if($errors->has('username'))
          <div class="text-sm tracking-wide text-red-500" id="error-titulo">{{ $errors->first('username') }}</div>
          @endif
        </div>
      <div class="relative mt-4">
        <label for="password" class="text-base leading-7 text-blueGray-500">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="********" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        @if($errors->has('password'))
         <div class="text-sm tracking-wide text-red-500" id="error-titulo">{{ $errors->first('password') }}</div>
         @endif
      </div>
        <div class="inline-flex flex-wrap items-center justify-between mt-4">
          <button class="w-full px-4 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800" type="submit"> Ingresar </button>
        </div>
      </div>
    </div>
  </form>
</section>

@endsection