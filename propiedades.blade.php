<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite('resources/css/app.css') @vite('resources/js/app.js')
    <title>Propiedades</title>
</head>

<body>
    <!-- Nav-->

    <div class="min-h-screen bg-gray-100 relative">
        <nav x-data="{ open: false, login: false, isRegistering: true }" class="absolute top-0 z-20 w-full">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="/">
                            <svg viewBox="0 0 70 74" class=" mt-1 h-16 w-12 fill-white">
                                <path
                                    d="M55.4167 43.1667V23.125L40.8334 12.3333L26.25 23.125V27.75H20.4167V20.0417L40.8334 4.625L61.25 20.0417V43.1667H55.4167ZM42.2917 24.6667H45.2084V21.5833H42.2917V24.6667ZM36.4584 24.6667H39.375V21.5833H36.4584V24.6667ZM42.2917 30.8333H45.2084V27.75H42.2917V30.8333ZM36.4584 30.8333H39.375V27.75H36.4584V30.8333ZM40.8334 69.375L20.4167 63.3625V67.8333H2.91669V33.9167H26.1042L44.1875 41.0083C45.7917 41.625 47.0925 42.7042 48.09 44.2458C49.0856 45.7875 49.5834 47.4833 49.5834 49.3333H55.4167C57.8472 49.3333 59.9132 50.1813 61.6146 51.8771C63.316 53.5729 64.1667 55.8083 64.1667 58.5833V61.6667L40.8334 69.375ZM8.75002 61.6667H14.5834V40.0833H8.75002V61.6667ZM40.6875 62.9L58.0417 57.1958C57.8959 56.6306 57.5672 56.2061 57.0559 55.9224C56.5464 55.6408 56 55.5 55.4167 55.5H41.4167C39.9097 55.5 38.5486 55.3972 37.3334 55.1917C36.1181 54.9861 34.8056 54.6264 33.3959 54.1125L28.3646 52.2625L30.0417 46.4042L35.875 48.4083C36.75 48.7167 37.7709 48.9479 38.9375 49.1021C40.1042 49.2562 41.7084 49.3333 43.75 49.3333C43.75 48.7681 43.5925 48.2285 43.2775 47.7146C42.9606 47.2007 42.5834 46.8667 42.1459 46.7125L25.0834 40.0833H20.4167V57.0417L40.6875 62.9Z">
                                </path>
                            </svg>

                    </div>
                    <div class="flex justify-between">
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                            <a class="inline-flex items-center px-1 pt-1 text-md font-medium leading-5
                         text-white focus:outline-none  focus:bg-primary transition duration-150 ease-in-out"
                                href="#">
                                Inicio
                            </a> <a
                                class="inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-white
                                             hover:text-gray-200 hover:text-primary focus:outline-none focus:bg-primary transition
                                duration-150 ease-in-out"
                                href="#">
                                Lanzamientos
                            </a> <a
                                class="inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-white
                                                          hover:text-gray-200 hover:text-primary focus:outline-none focus:bg-primary transition
                                              duration-150 ease-in-out"
                                href="#">
                                Inmuebles
                            </a> <a
                                class="inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-white
                                                 hover:text-gray-200 hover:text-primary focus:outline-none focus:bg-primary transition
                                          duration-150 ease-in-out"
                                href="#">
                                Nosotros
                            </a> <a
                                class="inline-flex items-center px-1 pt-1 text-md font-medium leading-5 text-white
                                               hover:text-gray-200 hover:text-primary focus:outline-none focus:bg-primary transition
                                          duration-150 ease-in-out"
                                href="#">
                                Aprende
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-between ">
                        <div class="self-center">
                            <a href="/login"
                                class="bg-blue-950 rounded-tl-lg rounded-br-lg text-white text-lg py-2 px-4">Inversiones</a>
                        </div>




                        <!-- Settings Dropdown -->
                        <div class="hidden md:flex md:items-center md:ml-6">
                            <div wire:id="3BphEcRXlQbECLPdCJ7A"
                                wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;3BphEcRXlQbECLPdCJ7A&quot;,&quot;name&quot;:&quot;auth-user&quot;,&quot;locale&quot;:&quot;es&quot;,&quot;path&quot;:&quot;mega-proyecto\/282fa831-9626-4832-bac5-c925da72d9a6&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;025522c1&quot;,&quot;data&quot;:{&quot;name&quot;:null,&quot;password&quot;:null,&quot;phone&quot;:null,&quot;email&quot;:null,&quot;logEmail&quot;:null,&quot;logPassword&quot;:null},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;882bce0048166f825dc9e575648d49ed70486aec7f2d4bfc3b7702d039f1478a&quot;}}"
                                class="">
                                <img @click="login = !login" src="media/profile.png" alt="user"
                                    class="w-15 h-15  cursor-pointer mt-3">

                                <div x-cloak :class="{ 'hidden': !login }"
                                    class="absolute right-24 mt-2 bg-white rounded-2xl rounded-tr-none px-6 pt-5 w-5/6">

                                    <div class="flex gap-x-4 mb-4">
                                        <h4 @click="isRegistering = !isRegistering"
                                            class="text-gray-400 cursor-pointer font-bold text-2xl xl:text-4xl"
                                            :class="{ 'text-primarySingle': isRegistering }" class="text-gray-400">
                                            Regístrate</h4>
                                        <h4 @click="isRegistering = !isRegistering"
                                            class="text-gray-400 cursor-pointer font-bold text-2xl xl:text-4xl"
                                            :class="{ 'text-primarySingle': !isRegistering }" class="text-gray-400">
                                            Login</h4>

                                    </div>
                                    <form wire:submit.prevent='store'>
                                        <div :class="{ 'hidden': !isRegistering }" class="grid grid-cols-2 gap-x-4">
                                            <div class="grid grid-cols-1 gap-y-3">
                                                <input
                                                    class="bg-lightGray/30 text-darkGray py-2 px-1 border-0 hover:outline-0 outline-0 rounded-xl"
                                                    wire:model="name" placeholder="Ingresa tu nombre">

                                                <input
                                                    class="bg-lightGray/30 text-darkGray py-2 px-1 border-0 hover:outline-0 outline-0 rounded-xl"
                                                    wire:model="email" placeholder="Ingresa tu correo" name="email">

                                                <input
                                                    class="bg-lightGray/30 text-darkGray py-2 px-1 border-0 hover:outline-0 outline-0 rounded-xl"
                                                    wire:model="phone" placeholder="Ingresa tu número" name="phone">

                                            </div>
                                            <div>
                                                <div class="grid grid-cols-1 gap-y-3">
                                                    <input
                                                        class="bg-lightGray/30 text-darkGray py-2 px-1 border-0 hover:outline-0 outline-0 rounded-xl"
                                                        wire:model="password" name="password" placeholder="Contraseña">

                                                    <a class="mb-3 flex items-center justify-center rounded bg-white px-7 pt-3 pb-2.5 text-center text-sm font-medium uppercase leading-normal text-slate-600 shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-slate-400 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-white active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)]"
                                                        href="https://goldenhome.com.co/socialAuth" role="button"
                                                        data-te-ripple-init data-te-ripple-color="light">
                                                        <!-- Google -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                            width="1.5rem" height="1.5rem">
                                                            <path fill="#FFC107"
                                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                                            <path fill="#FF3D00"
                                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                                            <path fill="#4CAF50"
                                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                                            <path fill="#1976D2"
                                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                                        </svg>
                                                        Continuar con Goolge
                                                    </a>
                                                    <div class="flex flex-wrap gap-x-6">
                                                        <button type="submit"
                                                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 bg-primarySingle rounded-tl-xl rounded-br-xl">
                                                            Enviar
                                                        </button>

                                                        <div class="self-end">
                                                            <input id="terms" type="checkbox" />
                                                            <label for="terms" class="text-gray-500 underline">
                                                                Términos y
                                                                condiciones</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form wire:submit.prevent='login'>

                                        <div :class="{ 'hidden': isRegistering }" class="grid grid-cols-2 gap-x-4">
                                            <div class="grid grid-cols-1 gap-y-3">
                                                <div>
                                                    <input
                                                        class="bg-lightGray/30 text-darkGray py-2 px-1 border-0 hover:outline-0 outline-0 rounded-xl w-full"
                                                        wire:model="logEmail" placeholder="Ingresa tu correo">

                                                </div>
                                            </div>
                                            <div>
                                                <div class="grid grid-cols-1 gap-y-3">
                                                    <input
                                                        class="bg-lightGray/30 text-darkGray py-2 px-1 border-0 hover:outline-0 outline-0 rounded-xl"
                                                        wire:model="logPassword" placeholder="Contraseña"
                                                        type="password">

                                                    <a class="mb-3 flex items-center justify-center rounded bg-white px-7 pt-3 pb-2.5 text-center text-sm font-medium uppercase leading-normal text-slate-600 shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-slate-400 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-white active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)]"
                                                        href="https://goldenhome.com.co/socialAuth" role="button"
                                                        data-te-ripple-init data-te-ripple-color="light">
                                                        <!-- Google -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                                            width="1.5rem" height="1.5rem">
                                                            <path fill="#FFC107"
                                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                                            <path fill="#FF3D00"
                                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                                            <path fill="#4CAF50"
                                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                                            <path fill="#1976D2"
                                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                                        </svg>
                                                        Continuar con Goolge
                                                    </a>
                                                    <div class="flex flex-wrap gap-x-6">
                                                        <button type="submit"
                                                            class="text-white bg-primarySingle px-4 py-2 rounded-tl-xl rounded-br-xl ">
                                                            Ingresar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <img class="w-full" src="https://goldenhome.com.co/images/loginpopup.png">
                                </div>
                            </div>
                            <!-- Livewire Component wire-end:3BphEcRXlQbECLPdCJ7A -->


                        </div>
                    </div>




                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center md:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-100 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-10 w-10" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden "
                style="background: url('/media/primaryheader.png');">
                <div class="pt-2 pb-3 space-y-1 backdrop-blur-lg backdrop-brightness-75">
                    <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-200 hover:text-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out"
                        href="https://goldenhome.com.co">
                        Inicio
                    </a> <a
                        class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-200 hover:text-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600  transition duration-150 ease-in-out"
                        href="https://goldenhome.com.co">
                        Proyectos
                    </a> <a
                        class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-200 hover:text-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out"
                        href="https://goldenhome.com.co">
                        Propiedades
                    </a> <a
                        class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-200 hover:text-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out"
                        href="https://goldenhome.com.co">
                        Aprende
                    </a>
                </div>

                <!-- Responsive Settings Options -->
            </div>
        </nav>


        <div class="h-[40vh] rounded-b-lg bg-cover bg-center py-12"
            style="background-image: url('/media/primaryheader.png');">

            <h2 class=" hidden text-blue-950 text-6xl font-bold  md:hidden lg:block mt-20 ml-28">Propiedades</h2>

        </div>


        <!-- Content-->
        <section class=" grid grid-rows-1 md:grid-cols-3">
            <!-- Column Filter-->
            <div class="mx-10 md:mx-0  lg:mx-10">
                <!-- Two green buttons-->
                <div class="grid grid-cols-2 gap-3 mt-7">
                    <button type="submit"
                        class="bg-green-600 text-white font-bold py-2  rounded-br-xl rounded-tl-xl  text-lg w-full  shadow-lg shadow-blue-200">
                        Compra Fracción

                    </button>

                    <button type="submit"
                        class="bg-green-600 text-white font-bold py-2 rounded-br-xl rounded-tl-xl  text-lg w-full   shadow-lg shadow-blue-200 ">
                        Compra Tradicional
                    </button>
                </div>

                <!--Filter-->
                <div class=" bg-white shadow-xl rounded-xl pb-1">
                    <div class=" m-8 mt-4">
                        <h2 class="text-blue-950 font-bold text-2xl pt-8 ">
                            Tipos de inversion
                        </h2>


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




                        <h2 class="text-blue-950 font-bold text-2xl mt-8"> Características</h2>
                        <div class="mt-4">

                            <div class="flex justify-between font-bold">
                                <p class="text-gray-400 text-l "> Habitaciones </p>

                                <div x-data="{ count: 1 }" class="flex shadow-md rounded-md">
                                    <button x-on:click="count--"
                                        class="px-3 bg-white rounded-tl-xl rounded-bl-xl border-r-2 border-gray-200"
                                        x-bind:disabled="count <= 0">-</button>
                                    <div class="px-2 bg-white" x-text="count">2</div>
                                    <button
                                        class="px-3 bg-white rounded-tr-xl rounded-br-xl border-l-2 border-gray-200"
                                        x-on:click="count++">+</button>
                                </div>
                            </div>

                            <div class="flex justify-between mt-2 font-bold">
                                <p class="text-gray-400 text-l  "> Baños </p>
                                <div x-data="{ count: 1 }" class="flex shadow-md rounded-md">
                                    <button x-on:click="count--" x-bind:disabled="count <= 0"
                                        class="px-3 bg-white rounded-tl-xl rounded-bl-xl border-r-2 border-gray-200">-</button>
                                    <div class="px-2 bg-white" x-text="count">1</div>
                                    <button
                                        class="px-3 bg-white rounded-tr-xl rounded-br-xl border-l-2 border-gray-200"
                                        x-on:click="count++">+</button>
                                </div>

                            </div>

                        </div>


                        <div class="mt-5">
                            <button type="submit"
                                class="bg-blue-950 text-white font-bold py-2 px-10 rounded-br-xl rounded-tl-xl  my-4 text-md w-full text-xl ">
                                Filtrar Inmuebles
                            </button>
                        </div>


                    </div>
                </div>
                <!--Decoration-->
                <img class="hidden md:block" src="/media/grafi.png " alt="">

                <img class="sm:block absolute bottom-[60rem] left-0 hidden " src="/media/palmera.png "
                    alt="">


            </div>
            <!-- Column Houses-->
            <div class=" mx-10 md:col-span-2 md:mt-7">


                <div class="grid grid-rows-1 gap-5 md:grid-cols-1 ">
                    <!-- Bunch of text-->
                    <div class="my-4 md:mt-0  ">
                        <h2 class=" text-blue-950 text-xl font-bold">¿Qué es compra tradicional?</h2>
                        <p class="text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                            consequuntur, adipisci ea beatae sint est blanditiis ut quia provident dicta aliquam iusto
                            explicabo recusandae iste quo rerum nostrum laboriosam. Inventore.Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. Sed consequuntur, adipisci ea beatae sint est blanditiis
                            ut quia provident dicta aliquam iusto explicabo recusandae iste quo rerum nostrum
                            laboriosam. Inventore.</p>

                        <h2 class=" text-blue-950 text-xl font-bold">¿Qué es compra fraccionaria?</h2>
                        <p class="text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                            consequuntur, adipisci ea beatae sint est blanditiis ut quia.</p>

                        <h2 class=" text-blue-950 text-xl font-bold">Tipo de inmuebles compra fraccionada</h2>
                        <p class="text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                            consequuntur, adipisci ea beatae sint est blanditiis ut quia provident dicta aliquam iusto
                            explicabo recusandae iste quo rerum nostrum laboriosam. Inventore. adipisci ea beatae sint
                            est blanditiis ut quia provident dicta aliquam iusto explicabo recusandae iste quo rerum
                            nostrum laboriosam. Inventore</p>

                        <h2 class=" text-blue-950 text-xl font-bold">Beneficios de compra fraccionada</h2>
                        <p class="text-gray-500 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
                            consequuntur, adipisci ea beatae sint est blanditiis ut quia provident dicta aliquam iusto
                            explicabo recusandae iste quo rerum nostrum laboriosam. Inventore.Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit. Sed consequuntur, adipisci ea beatae sint est blanditiis
                            ut quia provident dicta aliquam iusto explicabo recusandae iste quo rerum nostrum
                            laboriosam. Inventore</p>

                    </div>


                    <!-- 1 house-->
                    <div
                        class="grid grid-rows-2 mb-4 sm:grid-rows-2 md:grid-rows-1 md:gap-x-10 md:grid-cols-5 lg:mb-5">
                        <!-- Image: 1-->
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
                        <!-- card price-->
                        <div class=" shadow-xl col-span-2 rounded-xl md:col-span-3 md:w-full lg:col-span-2 lg:w-full">
                            <div class="px-5 py-5">
                                <div class="flex justify-end">

                                    <button
                                        class="text-white bg-green-600 rounded-2xl font-semibold px-5 py-1 text-md mt-3 justify-end ">
                                        Fracción
                                    </button>
                                </div>
                                <div class="py-2 ">
                                    <h2 class="text-blue-900 font-bold text-2xl md:text-2xl">
                                        Nombre de la casa
                                    </h2>
                                    <p class="text-gray-600 text-sm ">
                                        Ubicacion del proyecto
                                    </p>
                                </div>

                                <hr class=" border-black py-2" />

                                <div class="grid grid-cols-3 gap-1 ">

                                    <div class="text-white bg-green-600  rounded-bl-lg rounded-tr-lg col-span-2 ">
                                        <p class="text-gray-200 text-md mx-2 mt-2">
                                            Valor Fracción
                                        </p>
                                        <h2 class="text-white font-bold text-xl mx-2">
                                            20.0000.000 <span class="font-normal text-xs">COP</span>
                                        </h2>
                                    </div>

                                    <div class="text-white  bg-green-600 rounded-bl-lg rounded-tr-lg col-span-1">

                                        <p class="text-gray-200 text-xs leading-none mt-2 text-center ">
                                            fracciones disponibles
                                        </p>

                                        <h2 class="text-white font-bold  mb-1 text-4xl text-center">
                                            10
                                        </h2>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h2 class="text-blue-950 font-bold text-xl">Fracciones Compradas #2</h2>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación uno</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación dos</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <p class="text-lg text-gray-600 mb-1">Detalles destacados</p>
                                </div>



                                <div class="flex justify-between mb-4">
                                    <div>
                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/door.png" alt="">
                                            <span class=" text-gray-600 text-sm">4 ambientes</span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bath.png" alt="">
                                            <span class="text-gray-600 text-sm"> 2 baños</span>
                                        </div>
                                    </div>



                                    <div>


                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/meters.png" alt="">
                                            <span class="text-gray-600 text-sm"> 60m<sup>2</sup></span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bed.png" alt="">
                                            <span class="text-gray-600 text-sm">3 dormitorios</span>
                                        </div>

                                    </div>

                                </div>



                                <button
                                    class="text-white bg-blue-900 cursor:pointer rounded py-1 px-10 rounded-tl-lg rounded-br-lg font-bold mt-3 text-lg  ">
                                    Ver más
                                </button>

                            </div>
                        </div>
                        <!-- Images: 2-->
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

                    <hr class="block border-black my-7 md:hidden" />
                    <!-- 2 house-->
                    <div
                        class="grid grid-rows-2 mb-4 sm:grid-rows-2 md:grid-rows-1 md:gap-x-10 md:grid-cols-5 lg:mb-5">
                        <!-- Image: 1-->
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
                        <!-- card price-->
                        <div class=" shadow-xl col-span-2 rounded-xl md:col-span-3 md:w-full lg:col-span-2 lg:w-full">
                            <div class="px-5 py-5">
                                <div class="flex justify-end">

                                    <button
                                        class="text-white bg-green-600 rounded-2xl font-semibold px-5 py-1 text-md mt-3 justify-end ">
                                        Fracción
                                    </button>
                                </div>
                                <div class="py-2 ">
                                    <h2 class="text-blue-900 font-bold text-2xl md:text-2xl">
                                        Nombre de la casa
                                    </h2>
                                    <p class="text-gray-600 text-sm ">
                                        Ubicacion del proyecto
                                    </p>
                                </div>

                                <hr class=" border-black py-2" />

                                <div class="grid grid-cols-3 gap-1 ">

                                    <div class="text-white bg-green-600  rounded-bl-lg rounded-tr-lg col-span-2 ">
                                        <p class="text-gray-200 text-md mx-2 mt-2">
                                            Valor Fracción
                                        </p>
                                        <h2 class="text-white font-bold text-xl mx-2">
                                            20.0000.000 <span class="font-normal text-xs">COP</span>
                                        </h2>
                                    </div>

                                    <div class="text-white  bg-green-600 rounded-bl-lg rounded-tr-lg col-span-1">

                                        <p class="text-gray-200 text-xs leading-none mt-2 text-center ">
                                            fracciones disponibles
                                        </p>

                                        <h2 class="text-white font-bold  mb-1 text-4xl text-center">
                                            10
                                        </h2>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h2 class="text-blue-950 font-bold text-xl">Fracciones Compradas #2</h2>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación uno</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación dos</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <p class="text-lg text-gray-600 mb-1">Detalles destacados</p>
                                </div>



                                <div class="flex justify-between mb-4">
                                    <div>
                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/door.png" alt="">
                                            <span class=" text-gray-600 text-sm">4 ambientes</span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bath.png" alt="">
                                            <span class="text-gray-600 text-sm"> 2 baños</span>
                                        </div>
                                    </div>



                                    <div>


                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/meters.png" alt="">
                                            <span class="text-gray-600 text-sm"> 60m<sup>2</sup></span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bed.png" alt="">
                                            <span class="text-gray-600 text-sm">3 dormitorios</span>
                                        </div>

                                    </div>

                                </div>



                                <button
                                    class="text-white bg-blue-900 cursor:pointer rounded py-1 px-10 rounded-tl-lg rounded-br-lg font-bold mt-3 text-lg  ">
                                    Ver más
                                </button>

                            </div>
                        </div>
                        <!-- Images: 2-->
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

                    <hr class="block border-black my-7 md:hidden" />
                    <!-- 3 house-->
                    <div
                        class="grid grid-rows-2 mb-4 sm:grid-rows-2 md:grid-rows-1 md:gap-x-10 md:grid-cols-5 lg:mb-5">
                        <!-- Image: 1-->
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
                        <!-- card price-->
                        <div class=" shadow-xl col-span-2 rounded-xl md:col-span-3 md:w-full lg:col-span-2 lg:w-full">
                            <div class="px-5 py-5">
                                <div class="flex justify-end">

                                    <button
                                        class="text-white bg-green-600 rounded-2xl font-semibold px-5 py-1 text-md mt-3 justify-end ">
                                        Fracción
                                    </button>
                                </div>
                                <div class="py-2 ">
                                    <h2 class="text-blue-900 font-bold text-2xl md:text-2xl">
                                        Nombre de la casa
                                    </h2>
                                    <p class="text-gray-600 text-sm ">
                                        Ubicacion del proyecto
                                    </p>
                                </div>

                                <hr class=" border-black py-2" />

                                <div class="grid grid-cols-3 gap-1 ">

                                    <div class="text-white bg-green-600  rounded-bl-lg rounded-tr-lg col-span-2 ">
                                        <p class="text-gray-200 text-md mx-2 mt-2">
                                            Valor Fracción
                                        </p>
                                        <h2 class="text-white font-bold text-xl mx-2">
                                            20.0000.000 <span class="font-normal text-xs">COP</span>
                                        </h2>
                                    </div>

                                    <div class="text-white  bg-green-600 rounded-bl-lg rounded-tr-lg col-span-1">

                                        <p class="text-gray-200 text-xs leading-none mt-2 text-center ">
                                            fracciones disponibles
                                        </p>

                                        <h2 class="text-white font-bold  mb-1 text-4xl text-center">
                                            10
                                        </h2>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h2 class="text-blue-950 font-bold text-xl">Fracciones Compradas #2</h2>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación uno</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación dos</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <p class="text-lg text-gray-600 mb-1">Detalles destacados</p>
                                </div>



                                <div class="flex justify-between mb-4">
                                    <div>
                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/door.png" alt="">
                                            <span class=" text-gray-600 text-sm">4 ambientes</span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bath.png" alt="">
                                            <span class="text-gray-600 text-sm"> 2 baños</span>
                                        </div>
                                    </div>



                                    <div>


                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/meters.png" alt="">
                                            <span class="text-gray-600 text-sm"> 60m<sup>2</sup></span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bed.png" alt="">
                                            <span class="text-gray-600 text-sm">3 dormitorios</span>
                                        </div>

                                    </div>

                                </div>



                                <button
                                    class="text-white bg-blue-900 cursor:pointer rounded py-1 px-10 rounded-tl-lg rounded-br-lg font-bold mt-3 text-lg  ">
                                    Ver más
                                </button>

                            </div>
                        </div>
                        <!-- Images: 2-->
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

                    <hr class="block border-black my-7 md:hidden" />
                    <!-- 4 house-->
                    <div
                        class="grid grid-rows-2 mb-4 sm:grid-rows-2 md:grid-rows-1 md:gap-x-10 md:grid-cols-5 lg:mb-5">
                        <!-- Image: 1-->
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
                        <!-- card price-->
                        <div class=" shadow-xl col-span-2 rounded-xl md:col-span-3 md:w-full lg:col-span-2 lg:w-full">
                            <div class="px-5 py-5">
                                <div class="flex justify-end">

                                    <button
                                        class="text-white bg-green-600 rounded-2xl font-semibold px-5 py-1 text-md mt-3 justify-end ">
                                        Fracción
                                    </button>
                                </div>
                                <div class="py-2 ">
                                    <h2 class="text-blue-900 font-bold text-2xl md:text-2xl">
                                        Nombre de la casa
                                    </h2>
                                    <p class="text-gray-600 text-sm ">
                                        Ubicacion del proyecto
                                    </p>
                                </div>

                                <hr class=" border-black py-2" />

                                <div class="grid grid-cols-3 gap-1 ">

                                    <div class="text-white bg-green-600  rounded-bl-lg rounded-tr-lg col-span-2 ">
                                        <p class="text-gray-200 text-md mx-2 mt-2">
                                            Valor Fracción
                                        </p>
                                        <h2 class="text-white font-bold text-xl mx-2">
                                            20.0000.000 <span class="font-normal text-xs">COP</span>
                                        </h2>
                                    </div>

                                    <div class="text-white  bg-green-600 rounded-bl-lg rounded-tr-lg col-span-1">

                                        <p class="text-gray-200 text-xs leading-none mt-2 text-center ">
                                            fracciones disponibles
                                        </p>

                                        <h2 class="text-white font-bold  mb-1 text-4xl text-center">
                                            10
                                        </h2>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h2 class="text-blue-950 font-bold text-xl">Fracciones Compradas #2</h2>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación uno</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <div class=" my-3 flex items-center gap-3">
                                        <img class="h-10" src="/media/lilhouse.png" alt="">
                                        <div>
                                            <h2 class="text-blue-950 font-bold text-xl">Casa ubicación dos</h2>
                                            <p class="text-sm text-gray-500">Ubicacion de proyecto</p>
                                        </div>



                                    </div>
                                    <p class="text-lg text-gray-600 mb-1">Detalles destacados</p>
                                </div>



                                <div class="flex justify-between mb-4">
                                    <div>
                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/door.png" alt="">
                                            <span class=" text-gray-600 text-sm">4 ambientes</span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bath.png" alt="">
                                            <span class="text-gray-600 text-sm"> 2 baños</span>
                                        </div>
                                    </div>



                                    <div>


                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/meters.png" alt="">
                                            <span class="text-gray-600 text-sm"> 60m<sup>2</sup></span>
                                        </div>

                                        <div class="flex gap-2">
                                            <img class="self-center" src="/media/bed.png" alt="">
                                            <span class="text-gray-600 text-sm">3 dormitorios</span>
                                        </div>

                                    </div>

                                </div>



                                <button
                                    class="text-white bg-blue-900 cursor:pointer rounded py-1 px-10 rounded-tl-lg rounded-br-lg font-bold mt-3 text-lg  ">
                                    Ver más
                                </button>

                            </div>
                        </div>
                        <!-- Images: 2-->
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


                </div>


            </div>

        </section>


        <!-- Contact-->
        <section class=" bg-white">
            <div class="flex justify-center mx-auto">
                <div class="relative h-[30rem] md:h-[40rem] w-full bg-cover bg-no-repeat bg-top "
                    style="background-image:url('/media/contact.jpg')">
                    <div class="absolute mt-16 -top-6 right-8 md:top-12 md:right-24 text-right lg:mt-0">
                        <h3 class="font-bold text-4xl md:text-7xl lg:text-8xl text-blue-900">
                            Contáctanos
                        </h3>
                        <p class="text-blue-900 md:text-xl lg:text-2xl">Sabemos lo que necesitas</p>
                        <button class="bg-green-500 text-white rounded-2xl font-semibold py-1 px-10 md:text-lg mt-4">
                            Enviar un mensaje
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-neutral-900 text-white">
            <div class="mx-6 py-10">
                <div class="grid gap-8 md:grid-cols-2">
                    <div class="">
                        <svg width="70" height="74" viewBox="0 0 70 74" class="block h-9 w-auto fill-white">
                            <path
                                d="M55.4167 43.1667V23.125L40.8334 12.3333L26.25 23.125V27.75H20.4167V20.0417L40.8334 4.625L61.25 20.0417V43.1667H55.4167ZM42.2917 24.6667H45.2084V21.5833H42.2917V24.6667ZM36.4584 24.6667H39.375V21.5833H36.4584V24.6667ZM42.2917 30.8333H45.2084V27.75H42.2917V30.8333ZM36.4584 30.8333H39.375V27.75H36.4584V30.8333ZM40.8334 69.375L20.4167 63.3625V67.8333H2.91669V33.9167H26.1042L44.1875 41.0083C45.7917 41.625 47.0925 42.7042 48.09 44.2458C49.0856 45.7875 49.5834 47.4833 49.5834 49.3333H55.4167C57.8472 49.3333 59.9132 50.1813 61.6146 51.8771C63.316 53.5729 64.1667 55.8083 64.1667 58.5833V61.6667L40.8334 69.375ZM8.75002 61.6667H14.5834V40.0833H8.75002V61.6667ZM40.6875 62.9L58.0417 57.1958C57.8959 56.6306 57.5672 56.2061 57.0559 55.9224C56.5464 55.6408 56 55.5 55.4167 55.5H41.4167C39.9097 55.5 38.5486 55.3972 37.3334 55.1917C36.1181 54.9861 34.8056 54.6264 33.3959 54.1125L28.3646 52.2625L30.0417 46.4042L35.875 48.4083C36.75 48.7167 37.7709 48.9479 38.9375 49.1021C40.1042 49.2562 41.7084 49.3333 43.75 49.3333C43.75 48.7681 43.5925 48.2285 43.2775 47.7146C42.9606 47.2007 42.5834 46.8667 42.1459 46.7125L25.0834 40.0833H20.4167V57.0417L40.6875 62.9Z">
                            </path>
                        </svg>

                        <p class="mt-2 max-w-2xl">
                            Este es un texto de relleno, que tiene la finalidad
                            de rellenar los espacios donde iria texto que
                            quieran incluir los clientes
                        </p>

                        <div class="mb-6 mt-4 flex gap-8">
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>

                            <a href="#!" type="button"
                                class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                                data-te-ripple-init data-te-ripple-color="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-full w-4"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-y-6">
                        <div class="">
                            <h6 class="mb-4 text-xl">Nuestro Servicios</h6>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Tasaciones</a>
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Compras</a>
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Alquileres</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Ventas</a>
                            </p>
                        </div>
                        <div class="">
                            <h6 class="mb-4 text-xl">Recursos</h6>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Preguntas Frecuentes</a>
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Sobre Nosotros</a>
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Novedades</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Políticas de Privacidad</a>
                            </p>
                        </div>
                        <div class="">
                            <h6 class="mb-4 text-xl">Soporte</h6>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Email</a>
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Contactanos</a>
                            </p>
                            <p class="mb-4">
                                <a href="#!" class="text-white">Centro de Soporte</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Términos de Servicios</a>
                            </p>
                        </div>
                        <div class="">
                            <h6 class="mb-4">
                                <a href="/admin">Constructora</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <hr class="mt-4" />
                <p class="mt-4">
                    Copyright 2023. Todos los derechos reservados
                </p>
            </div>
        </footer>
</body>

</html>
