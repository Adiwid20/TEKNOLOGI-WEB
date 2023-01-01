<x-app-layout>

    <head>
        <title>Package</title>
    </head>


    <body class="bg-gray-900 font-sans leading-normal tracking-normal">

        <!--Header-->
        <div class="w-full m-0 p-0 bg-cover bg-bottom bg-opacity-75"
            style="background-image:url('https://images.unsplash.com/photo-1670272590027-72888b060829?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2231&q=80');height: 80vh; opacity-70">
            <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
                <!--Title-->
                <p class="mt-24 text-white font-extrabold text-3xl md:text-5xl">
                    Bos Travel
                </p>
                <p class="text-xl md:text-2xl text-slate-200">Cari Destinasi Wisata Keingginanmu</p>
            </div>
        </div>

        <!--Container-->
        <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
            <div class="mx-0 sm:mx-6">
                <!--Lead Card-->

                <!--/Lead Card-->


                <!--Posts Container-->
                <div class="flex flex-wrap justify-between pt-0-mx-6">

                    <div class="container font-sans bg-gray-100 rounded mt-8 p-4 md:p-24 text-center">
                        <h2 class="font-bold break-normal text-2xl md:text-4xl">Cari Kategori Wisata</h2>
                        <h3 class="font-bold break-normal  text-gray-600 text-base md:text-xl">
                            Tiap Daerah Punya
                            Keunikan Wisata Tersendiri</h3>
                        <div class="w-full text-center pt-4">
                            <form action="#">
                                <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                                    <input type="name" placeholder=""
                                        class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                                    <button type="submit"
                                        class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 px-4 rounded shadow hover:bg-green-400">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                {{-- new --}}
                
            </div>


            <section class="mt-4">

                <!-- =================== CONTENT 1 ======================== -->
                @foreach ($data as $d)
{{-- {{dd($d)}} --}}
                <div class="md:flex font-sans pt-8 ">
                    <div class="md:shrink-0 ">
                        <a href="{{ route('preview_package',['id' => $d->package_id]) }}">
                            <img 
                            src="{{ asset($d->img_package) }}"
                                alt=""
                                class="w-full md:h-full md:w-72 inset-0 wfull h-full object-cover rounded-lg"
                                loading="lazy"/>
                        </a>
                    </div>
                    <form class="p-6 ">
                        <div class="flex flex-wrap">
                            <a href="{{ route('preview_package', ['id' => $d->package_id]) }}"
                                class="flex-auto fontmedium text-xl text-slate-900 dark:text-slate-100">
                                {{ $d->name_package}}
                            </a>
                            <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-green-600">
                                {{ $d->price}}
                            </div>
                            <div class="w-full flex-none mt-2 order-1 text-xl font-sm text-green-600">
                                {{-- {{ $d->komunitas->comunity_name }}  --}}
                            </div> 
                            <div class="w-full flex-none mt-2 order-1 text-xl font-sm text-green-600">
                                {{-- {{ $d->kategori->category_name }}  --}}
                            </div> 
                            {{-- <div class="text-sm font-medium text-green-600 ">
                                {{ $d->category->category_name}}
                            </div> --}}
                            <div class="text-sm font-medium text-green-600 ">
                                {{ $d->status}}
                            </div>
                        </div>
                        <ul role="list" class="pt-8 space-y-1 ">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                    {{$d->facility}}
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
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
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
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                    Relief yang terdisional
                                </span>
                            </li> --}}
                        </ul>
                        <div class="items-baseline mt-4 mb-6 pb-6 border-b mr-4 border-green-600 text-gray-400">
                            <p>
                                    {{$d->descriptions}}

                            <span class="text-sm text-gray-500">......</span></p>

                        </div>


                        <div class="flex space-x-4 mb-5 text-sm font-medium">
                            <div class="flex-auto flex space-x-4">
                                {{-- <button
                                    class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-white hover:bg-green-800"
                                    type="submit">
                                    More Info
                                </button> --}}
                                <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                    class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-gray-900 dark:text-gray-200 hover:bg-green-800 hover:border-none hover:text-white"
                                    type="button">
                                    <a href="{{$d->location}}">
                                    Cek Lokasi 
                                </button>
                            </div>

                            <button>
                            <a href="{{route('booked')}}"
                                class="flex-auto py-3 h-10 px-6 font-semibold rounded-full text-gray-900 dark:text-gray-200 border border-slate-500  hover:bg-green-800 hover:border-none">
                                Masukkan Keranjang 
                              </a>
                            </button>

                            <button
                                class="flex-none flex items-center justify-center w-9 h9 rounded-full text-green-200  hover:text-green-600"
                                type="button" aria-label="Like">
                                <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                    <path fill-rule="evenodd" cliprule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-sm text-green-500 dark:text-green-300">
                            {{$d->time}}
                        </p>
                    </form>
                </div>
                </section>  
                    @endforeach


                    
           
        </div>





  

        </footer>

        <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@4"></script>
        <script>
            //Init tooltips
            tippy('.avatar')
        </script>
    </body>
    <footer>
        @include('layouts.footer')
    </footer>

</x-app-layout>
