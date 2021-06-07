<section class="text-blueGray-700 ">
  <div class="container items-center px-5 py-12 lg:px-20 mx-auto">
    <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
      <div class="relative mt-4">
        <label for="nombre" class="text-base leading-7 text-blueGray-500">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
      </div>
      <div class="relative mt-4">
        <label for="precio" class="text-base leading-7 text-blueGray-500">Precio</label>
        <input type="number" id="precio" name="precio" placeholder="Precio (en centavos)" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
      </div>
      <div class="relative mt-4">
        <label class="text-base leading-7 text-blueGray-500" for="consola">Consola</label>
        <div class="relative ">
          <select name="consola" class="w-full px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border border-transparent rounded-lg appearance-none bg-gray-100 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            <option class="block mb-4 text-xs font-bold tracking-wide text-blueGray-500 uppercase " value="1"> Playstation 4</option>
            <option class="block mb-4 text-xs font-bold tracking-wide text-blueGray-500 uppercase " value="2"> Nintendo Switch</option>
          </select>
        </div>
      </div>
      <div class="relative mt-4">
        <label class="text-base leading-7 text-blueGray-500" for="consola">Formato</label>
        <div class="relative ">
          <select name="formato" class="w-full px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border border-transparent rounded-lg appearance-none bg-gray-100 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            <option class="block mb-4 text-xs font-bold tracking-wide text-blueGray-500 uppercase " value="1"> Físico</option>
            <option class="block mb-4 text-xs font-bold tracking-wide text-blueGray-500 uppercase " value="2"> Digital</option>
          </select>
        </div>
      </div>
      <div class="relative mt-4">
        <label class="text-base leading-7 text-blueGray-500" for="description"> Descripción </label>
        <textarea class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Descripción..." required=""></textarea>
      </div>
      <div class="inline-flex flex-wrap items-center justify-between mt-4">
        <button class="w-full px-4 py-2 my-2 text-base font-medium text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800"> Crear </button>
      </div>
    </div>
  </div>
</section>