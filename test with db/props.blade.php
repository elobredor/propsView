@extends('layouts.parent')

@section('title', 'Propiedades')

@section('content')


    <div class=" grid grid-rows-1 md:grid-cols-3 gap-x-">

        <div class="mx-10 md:mx-0  lg:mx-10">

            <section class=" bg-gray-300 shadow-xl rounded-xl ">
                <div class=" m-8">
                    <h2 class="text-blue-950 font-bold text-2xl pt-8 ">
                        Tipos de inversion
                    </h2>
                    <!--Content Filter-->

                    <div class="grid grid-cols-3 text-center mt-5 ">

                        <label class="flex gap-2">
                            <div>
                                <img src="/media/Home.png" alt="">
                                <span class="text-gray-500 ">Casa</span>
                            </div>
                            <input class="self-start " type="radio" name="inversion" value="casa" />
                        </label>

                        <label class="flex items-center mr-20">
                            <div>
                                <img class="inline" src="/media/building.png" alt="">

                                <span class="text-gray-500">Apartamento</span>
                            </div>
                            <input class="self-start" type="radio" name="inversion" value="casa" />
                        </label>

                        <label class="flex ml-12 gap-2 ">
                            <div class="">
                                <img class="" src="/media/square.png" alt="">
                                <span class="text-gray-500 ">Lote</span>
                            </div>
                            <input class="self-start " type="radio" name="inversion" value="casa" />
                        </label>



                    </div>

                    <div class="grid grid-cols-2 mt-5">

                        <label class="flex items-center gap-2 ">
                            <input type="radio" name="compra" value="tradicional" />
                            <span class="text-l text-blue-950 font-bold leading-none">Compra <br> Tradicional</span>
                        </label>

                        <label class="flex items-center gap-2 ml-5">
                            <input type="radio" name="compra" value="fraccion" />
                            <span class="text-l text-blue-950 font-bold leading-none">Compra <br> Fracción</span>
                        </label>
                    </div>


                    <h2 class="text-blue-950 font-bold text-2xl mt-4"> Características</h2>
                    <div class="mt-4">

                        <div class="flex justify-between font-bold">
                            <p class="text-gray-400 text-l "> Habitaciones </p>

                            <div x-data="{ count: 0 }" class="flex shadow-md rounded-md">
                                <button x-on:click="count--"
                                    class="px-3 bg-white rounded-tl-xl rounded-bl-xl border-r-2 border-gray-200"
                                    x-bind:disabled="count <= 0">-</button>
                                <div class="px-2 bg-white" x-text="count">2</div>
                                <button class="px-3 bg-white rounded-tr-xl rounded-br-xl border-l-2 border-gray-200"
                                    x-on:click="count++">+</button>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2 font-bold">
                            <p class="text-gray-400 text-l  "> Baños </p>
                            <div x-data="{ count: 0 }" class="flex shadow-md rounded-md">
                                <button x-on:click="count--" x-bind:disabled="count <= 0"
                                    class="px-3 bg-white rounded-tl-xl rounded-bl-xl border-r-2 border-gray-200">-</button>
                                <div class="px-2 bg-white" x-text="count">1</div>
                                <button class="px-3 bg-white rounded-tr-xl rounded-br-xl border-l-2 border-gray-200"
                                    x-on:click="count++">+</button>
                            </div>

                        </div>

                    </div>


                    <div class="mt-5">
                        <button type="submit"
                            class="bg-blue-950 hover:bg-blue-800 text-white font-bold py-2 px-10 rounded-br-xl rounded-tl-xl  my-4 text-md w-full text-xl ">
                            Filtrar Inmuebles
                        </button>
                    </div>


                </div>
            </section>

            <img class="hidden md:block" src="/media/grafi.png " alt="">

            <img  class="sm:block absolute bottom-[60rem] left-0 hidden -z-1" src="/media/palmera.png " alt="">


        </div>

        <div class=" mx-10 md:col-span-2 md:mt-7">


            <div class="grid grid-rows-1 gap-5 md:grid-cols-1 ">

                <x-cardprice :houses="$houses"></x-cardprice>

            </div>


        </div>

    </div>




@endsection
