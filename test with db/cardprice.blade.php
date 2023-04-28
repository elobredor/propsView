<div>
    @foreach($houses as $house)
    <div
    class="grid grid-rows-2 mb-4 sm:grid-rows-2 md:grid-rows-1 md:gap-x-10 md:grid-cols-5 lg:mb-5">

    <div class="col-span-2 bg-cover bg-center rounded-2xl ">

        <div class=" grid grid-rows-3 gap-y-3 h-full">

            <div class=" row-span-2 bg-cover bg-center rounded-2xl "
                style="background-image: url('/media/house.jpg');">
            </div>

            <div class=" bg-cover bg-center rounded-2xl flex justify-center cursor-pointer "
                style="background-image: url('https://goldenhome.com.co/storage/propertyTypes/images/1fxcHTpj8Kdmwljty8sP9B80Crslcu-metaU2NyZWVuc2hvdF8zLmpwZw==-.jpg');">
                <div class="place-self-center text-center text-white">
                    <h5 class="font-bold text-xl sm:text-2xl">+4</h5>
                    <h3 class="sm:text-lg">Imagenes</h3>
                </div>
            </div>

        </div>
    </div>

        <div class=" shadow-xl col-span-2 rounded-xl md:col-span-3 md:w-full lg:col-span-2 lg:w-full">
            <div class="px-5 py-5">
                <div class="flex justify-end">

                <button class="text-white bg-green-600 rounded-2xl font-semibold px-5 py-1 text-md mt-3 justify-end ">
                    Venta
                </button>
            </div>
                <div class="py-2 ">
                    <h2 class="text-blue-900 font-bold text-2xl md:text-2xl">
                        {{ $house->nameProperty }}
                    </h2>
                    <p class="text-gray-600 text-sm ">
                        {{ $house->location }}
                    </p>
                </div>

                <hr class=" border-black py-2" />

                <div class="text-white bg-green-600 px-2 py-1 rounded-bl-lg rounded-tr-lg">
                    <p class="text-gray-200 text-sm md:text-md">
                        Valor propiedad
                    </p>
                    <h2 class="text-white font-bold text-2xl md:text-1xl">
                        {{ $house->price}}.0000.000 <span>COP</span>
                    </h2>
                </div>

                <div class="flex justify-between my-4">
<div>
                    <div class="flex gap-2">
                        <img class="self-center" src="/media/door.png" alt="">
                        <span class=" text-gray-600 text-xs">{{ $house->rooms }} ambientes</span>
                    </div>

                    <div class="flex gap-2">
                        <img class="self-center" src="/media/bath.png" alt="">
                        <span class="text-gray-600 text-xs"> {{ $house->baths }} baños</span>
                    </div>
                </div>

                <div>
                    


                    <div class="flex gap-2">
                        <img class="self-center" src="/media/meters.png" alt="">
                        <span class="text-gray-600 text-xs"> {{ $house->dimensions }}m<sup>2</sup></span>
                    </div>

                    <div class="flex gap-2">
                        <img class="self-center" src="/media/bed.png" alt="">
                        <span class="text-gray-600 text-sm">{{ $house->bedrooms }} dormitorios</span>
                    </div>

                </div>

                </div>

                <h2 class="text-blue-900 text-xl font-bold">
                    {{ $house->namesProject }}
                </h2>
                <a class="block underline text-gray-600 " href="#">conocer mas</a>

                <button
                    class="text-white bg-blue-900 cursor:pointer rounded py-1 px-10 rounded-tl-lg rounded-br-lg font-bold mt-3 text-lg  ">
                    Ver más
                </button>

            </div>
        </div>

        <div class="w-10/12 hidden lg:block lg:w-full ">

            <div class="w-full h-full grid grid-rows-3 gap-y-3">

                <div class="row-span-2 bg-cover bg-center rounded-2xl"
                    style="background-image: url('https://goldenhome.com.co/storage/propertyTypes/images/vHWP4BA3L4IMLDJyMEdxVCUlsTbW5m-metaU2NyZWVuc2hvdF8xLmpwZw==-.jpg');">
                </div>

                <div class="w-full  bg-cover bg-center rounded-2xl flex justify-center cursor-pointer"
                    style="background-image: url('https://goldenhome.com.co/storage/propertyTypes/images/1fxcHTpj8Kdmwljty8sP9B80Crslcu-metaU2NyZWVuc2hvdF8zLmpwZw==-.jpg');">
                    <div class="place-self-center text-center text-white">
                        <h5 class="font-bold text-xl sm:text-2xl">+4</h5>
                        <h3 class="sm:text-lg">Imagenes</h3>
                    </div>
                </div>

            </div>
        </div>

      

    </div>
    <hr class="block border-black my-9 md:hidden"  />
   
    @endforeach
</div>
