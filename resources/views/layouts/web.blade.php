<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <title>{{ config('app.name') }}</title>
</head>
<body>

  <div class="container items-center m-auto">
    <div class="items-center justify-between w-full px-5 overflow-y-auto tflex whitespace-nowrap scroll-hidden border rounded-lg">
      <div class="flex flex-col flex-wrap mx-auto md:items-center md:flex-row">
        <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
          <div class="inline-flex items-center">
            <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
            </div>
            <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-gray-500 lg:text-x lg:mr-8"> DVGames </h2>
          </div>
        </a>
        <nav class="flex flex-wrap items-center justify-start text-base ">
          <ul class="items-center inline-block list-none lg:inline-flex">
            <li>
              <a href="{{ route('home') }}" class="px-4 py-1 mr-1 text-base text-gray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Home</a>
            </li>
            <li>
              <a href="{{ route('panel.panel') }}" class="px-4 py-1 mr-1 text-base text-gray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Panel</a>
            </li>
          </ul>
        </nav>
        <button class="w-auto px-8 py-2 my-2 ml-auto text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:b-gblue-700">Iniciar Sesión</button>
      </div>
    </div>
  </div>

  @yield('content')

  @yield('footer')

</body>
</html>