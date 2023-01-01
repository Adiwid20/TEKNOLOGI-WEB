<x-app-layout>
    <!-- component -->
    <!-- This is an example component -->

    <head>
        <title></title>
    </head>
    
   {{-- {{dd($d)}} --}}
    <body class="antialiased">
        <div class="py-16">
            @foreach ($data as $d)
            <!-- Breadcrumbs -->
            <div class="mt- max-w-16xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="#" class="hover:underline hover:text-gray-600">Package</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-200" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    {{-- <a href="#" class="hover:underline hover:text-gray-600"></a> --}}
                    {{-- <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </span> --}}
                    <span class="text-gray-200"
                    >{{$d->name_package}}</span>
                </div>
            </div>
            
            <!-- ./ Breadcrumbs -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-122 m-16">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div x-data="{ image: 1 }" x-cloak>
                            <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                                <div x-show="image === 1"
                                    class="h-64 md:h-80 rounded-lg  mb-4 flex items-center justify-center bg-cover bg-center">
                                    <img 
                                    src="{{ asset($d->img_package) }}">
                                </div>
                            </div>
                            <div class="dark:text-white mt-16 ">
                            {{ $d->descriptions}}
                        </div>
                            {{-- <div class="flex -mx-2 mb-4">
                                <template x-for="i in 4">
                                    <div class="flex-1 px-2">
                                        <button x-on:click="image = i"
                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                            class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-900 flex items-center justify-center">
                                            <span x-text="i" class="text-2xl"></span>
                                        </button>
                                    </div>
                                </template>
                            </div> --}}
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 dark:text-gray-200 text-2xl md:text-3xl">
                            {{$d->name_package}}</h2>
                        <p class="text-gray-500 text-sm">By <a href="#"
                                class="text-indigo-600 hover:underline">
                                {{-- {{ $d->komunitas->comunity_name }}  --}}
                            </a></p>
                                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                                    <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span
                                            class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                            {{ $d->facility }} 
                                        </span>
                                    </li>
                                    {{-- <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span
                                            class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                            Air Laut dengan ombak sedang 
                                        </span>
                                    </li>
                                    <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span
                                            class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                           Relief yang terdisional 
                                        </span>
                                    </li> --}}
                                </ul>
                        <div class="flex items-center space-x-4 my-4">
                            {{-- <div>
                                <div class="rounded-lg bg-green-500 flex py-2 px-3">
                                    <span class="text-red-400 mr-1 mt-1"></span>
                                    <span class="font-bold text-red-600 text-3xl">25</span>
                                </div> --}}
                            </div>
                            <div class="flex-1">
                                {{-- <p class="text-green-500 text-xl font-semibold">Save 12%</p> --}}
                                {{-- <p class="text-gray-600 dark:text-gray-400 text-sm">Inclusive of all Taxes.</p> --}}
                            </div>
                        </div>

                        {{-- <p class="text-gray-500">Memberikan pengalaman terbaik yang tak terlupakan seumur hidup bagi anda</p> --}}

                        {{-- <div class="flex mx-4 py-4 space-x-4">
                            <div class="relative">
                                {{-- <div class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold"></div> --}}
                                {{-- <select
                                    class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select> 

                                <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                </svg>
                            </div> --}}

                            <button type="button">
                           <a href ="{{route('booked')}}"

                                class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
    </body>
 
    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>


    </div>
</x-app-layout>
