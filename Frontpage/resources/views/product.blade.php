<x-app-layout>

    <head>
        <title>Product</title>
    </head>

        <body class="bg-gray-200 font-sans leading-normal tracking-normal">

            <!--Header-->
            <div class="w-full m-0 p-0 bg-cover bg-bottom bg-opacity-75"
                style="background-image:url('img/bg-product.avif');height: 60vh;">
                <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
                    <!--Title-->
                    <p class="text-white font-extrabold text-3xl md:text-5xl">
                        Big Bos
                    </p>
                    <p class="text-xl md:text-2xl text-slate-200">Cari Destinasi Wisata Keingginanmu</p>
                </div>
            </div>

            <!--Container-->
            <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
                <div class="mx-0 sm:mx-6">
                    <!--Lead Card-->
                    <div class="flex h-full bg-white bg-opacity-80  rounded overflow-hidden shadow-lg">
                        <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
                            <div class="w-full md:w-2/3 rounded-t">
                                <img src="https://images.unsplash.com/photo-1592393613858-ed47154c9623?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                    class="h-full w-full shadow">
                            </div>

                            <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                                <div class="flex-1 bg-white dark:bg-gray-800 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                    <p class="w-full text-gray-900 dark:text-gray-100 font-bold text-xl pt-6 px-6">Bali</p>
                                    <div class="w-full font-bold text-l text-gray-600 dark:text-gray-300 px-6"> 
                                        Destinasi Wisata terbaik dari Indonesia
                                    </div>
                                    <p class="text-gray-500 dark:text-gray-400 font-serif text-base px-6 my-5">
                                        Bali adalah bagian dari Indonesia, terkenal karena keindahan alam dan tradisi yang unik dan sakral
                                        
                                    </p>
                                </div>
                                <div
                                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                    <div class="flex items-center justify-between">
                                        
                                        
                                        <button
                                            class="h-10 px-6 font-semibold rounded-full text-slate-900 border border-slate-500  hover:border-none hover:text-white hover:bg-green-600"
                                            type="submit">
                                            Kunjungi
                                        </button>
                                        {{-- <text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Download</a>> --}}



                                    </div>

                                </div>
                            </div>

                        </a>
                    </div>
                    <!--/Lead Card-->


                    <!--Posts Container-->
                    <div class="flex flex-wrap justify-between pt-12 -mx-6">

                        <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
                            <h2 class="font-bold break-normal text-2xl md:text-4xl">Cari Kategori Wisata</h2>
                            <h3 class="font-bold break-normal  text-gray-600 text-base md:text-xl">Tiap Daerah Punya Keunikan Wisata Tersendiri</h3>
                            <div class="w-full text-center pt-4">
                                <form action="#">
                                    <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                                        <input type="name" placeholder=""
                                            class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                                        <button type="submit"
                                            class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>


                   

                    
                    {{-- Product --}}
                </div>
                <!-- =================== CONTENT 1 ======================== -->

                <div class="md:flex font-sans pt-8">
                    <div class="md:shrink-0">
                        <img src="https://i.pinimg.com/564x/0d/3f/5e/0d3f5ea58c5828162a193e43468c1f6f.jpg"
                            alt=""
                            class="w-full md:h-full md:w-56 inset-0 wfull h-full object-cover rounded-lg"
                            loading="lazy" />
                    </div>
                    <form class="p-6">
                        <div class="flex flex-wrap">
                            <h1 class="flex-auto font-medium  text-slate-900 dark:text-slate-100">
                                Kecak Fire Gianyar
                            </h1>
                            <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-green-600">
                                Rp. 100.000
                            </div>
                            <div class="text-sm font-medium text-green-600 ">
                                Available
                            </div>
                        </div>
                        <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-green-600 dark:text-white">
                            First, one of the mostvisited tourist attractions in Bali is Ubud, visited by either
                            local or international tourists.
                            Ubud Bali tourist attraction has astonished many visitors who always want to return
                        </div>
                        <div class="flex space-x-4 mb-5 text-sm font-medium">
                            <div class="flex-auto flex space-x-4">
                                <button
                                    class="h-10 px-6 font-semibold rounded-full bg-green-600 text-white hover:bg-green-800"
                                    type="submit">
                                    Book Now
                                </button>
                                <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                    class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-slate-900 dark:text-white hover:bg-green-800 hover:border-none hover:text-white"
                                    type="button">
                                    Check Availability
                                </button>
                            </div>

                            <button
                                class="flex-auto h-10 px-6 font-semibold rounded-full text-slate-200 border border-slate-500 dark:text-white hover:bg-green-800 hover:border-none">
                                Masukkan Keranjang
                                <a href="#cartpage"></a>
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
                        <p class="text-sm text-slate-500 dark:text-slate-300">
                            Free welcome drink, mask, and lunch.
                        </p>
                    </form>
                </div>

                <<!--===================CONTENT 2========================-->

                    <div class="md:flex font-sans pt-8">
                        <div class="md:shrink-0">
                            <img src="https://i.pinimg.com/564x/ed/4f/d0/ed4fd019f8557c71b72df37b3b77feed.jpg"
                                alt=""
                                class="h-48 w-full md:h-full md:w-56 inset-0 wfull` object-cover rounded-lg hover:"
                                loading="lazy" />
                        </div>
                        <form class="p-6">
                            <div class="flex flex-wrap">
                                <h1 class="flex-auto font-medium text-slate-900 dark:text-white">
                                    Heaven's Gate Lempuyang
                                </h1>
                                <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-green-600">
                                    Rp. 50.000
                                </div>
                                <div class="text-sm font-medium text-slate-400">
                                    Not Available
                                </div>
                            </div>
                            <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-green-600 dark:text-white">
                                First, one of the most visited tourist attractions in Bali is Lempuyang, both visited by
                                tourists
                                local or international tourists.
                                The Lempuyang Bali tourist attraction with the gates of heaven has amazed many visitors
                                who always want to take pictures with a view of the Agung mountain
                                I want to go back
                            </div>
                            <div class="flex space-x-4 mb-5 text-sm font-medium">
                                <div class="flex-auto flex space-x-4">
                                    <button
                                        class="h-10 px-6 font-semibold rounded-full text-slate-900 border border-slate-500 dark:text-white hover:text-white hover:bg-slate-500"
                                        type="submit">
                                        Book Now
                                    </button>
                                    <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                        class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-slate-900  dark:text-white hover:bg-green-800 hover:border-none hover:text-white"
                                        type="button">
                                        Check Availability
                                    </button>
                                </div>
                                <button
                                    class="flex-auto h-10 px-6 font-semibold rounded-full text-slate-300 border border-slate-500 dark:text-white hover:bg-slate-600 hover:border-none">
                                    Masukkan Keranjang
                                    <a href="#keranjang"></a>
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
                            <p class="text-sm text-slate-500 dark:text-slate-300">
                                Free welcome drink, mask, and lunch.
                            </p>
                        </form>
                    </div>

                    <!-- =================== CONTENT 3 ======================== -->

                    <div class="md:flex font-sans py-8">
                        <div class="md:shrink-0">
                            <img src="https://i.pinimg.com/564x/1e/f6/3b/1ef63b79d76006b03ff0e3085d6e8bc2.jpg"
                                alt=""
                                class="h-48 w-full md:h-full md:w-56 inset-0 wfull` object-cover rounded-lg hover:"
                                loading="lazy" />
                        </div>
                        <form class="p-6">
                            <div class="flex flex-wrap">
                                <h1 class="flex-auto font-medium text-slate-900 dark:text-white">
                                    Calonarang Traditional Culture
                                </h1>
                                <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-green-600">
                                    Rp. 200.000
                                </div>
                                <div class="text-sm font-medium text-green-600">
                                    Available
                                </div>
                            </div>
                            <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-green-600 dark:text-white">
                                First, one of the most visited traditional cultural tourist attractions in Bali is
                                Calonanang, both visited by tourists
                                local or international tourists.
                                The traditional tourism object of the Calonarang Balinese tradition with sacred
                                ceremonial rituals, namely calling randa visitors who always want to watch with a very
                                sacred atmosphere
                                I want to come back
                            </div>
                            <div class="flex space-x-4 mb-5 text-sm font-medium">
                                <div class="flex-auto flex space-x-4">
                                    <button
                                        class="h-10 px-6 font-semibold rounded-full bg-green-600 text-white hover:bg-green-800"
                                        type="submit">
                                        Book Now
                                    </button>
                                    <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                        class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-slate-900  dark:text-white hover:bg-green-800 hover:border-none hover:text-white"
                                        type="button">
                                        Check Availability
                                    </button>
                                </div>
                                <button
                                    class="flex-auto h-10 px-6 font-semibold rounded-full text-slate-300 border border-slate-500 dark:text-white hover:bg-green-800 hover:border-none">
                                    Masukkan Keranjang
                                    <a href="#keranjang"></a>
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
                            <p class="text-sm text-slate-500 dark:text-slate-300">
                                Free welcome drink, mask, and lunch.
                            </p>
                        </form>
                    </div>

            </div>


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
