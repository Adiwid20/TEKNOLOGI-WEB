@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="bg-gray-200 dark:bg-gray-800 py-12 " >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg" >
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
            <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-700">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b  border-slate-200 pt-2 pb-6">
                        <h1 class="text-4xl font-bold tracking-tight text-gray900 dark:text-slate-100">New Arrivals</h1>
                        <div class="flex items-center">
                            <div date-rangepicker class="flex items-center">
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-900 dark:text-slate-100"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fillrule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                cliprule="evenodd"></path>
                                        </svg>
                                        
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block wfull pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-gray-500">to</span>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">

                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-900 dark:text-slate-100"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fillrule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" cliprule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input name="end" type="text"
                                        class="bg-gray-50 border border-gray300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block wfull pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date end">
                                </div>
                            </div>
                            <button type="button"
                                class="inline-block mx-4 px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-rmd hover:bg-indigo-100 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration150 ease-in-out">Check</button> 
                        </div>
                        <div class=" fontmedium mx-10 px-6 py-2 border border-slate-600 rounded-lg text-slate-200" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>
                            <a href="#keranjangpage"> Keranjang</a>
                        </div>
                    </div>
                    <section>

                        <!-- =================== CONTENT 1 ======================== -->
                        
                        <div class="md:flex font-sans pt-8">
                            <div class="md:shrink-0">
                                <img src="https://i.pinimg.com/564x/0d/3f/5e/0d3f5ea58c5828162a193e43468c1f6f.jpg"
                                    alt="" class="w-full md:h-full md:w-56 inset-0 wfull h-full object-cover rounded-lg"
                                    loading="lazy" />
                            </div>
                            <form class="p-6">
                                <div class="flex flex-wrap">
                                    <h1 class="flex-auto font-medium  text-slate-900 dark:text-slate-100">
                                        Kecak Fire Gianyar
                                    </h1>
                                    <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                        Rp. 100.000
                                    </div>
                                    <div class="text-sm font-medium text-violet-600 ">
                                        Available
                                    </div>
                                </div>
                                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-violet-600 dark:text-white">
                                    First, one of the mostvisited tourist attractions in Bali is Ubud, visited by either
                                    local or international tourists.
                                    Ubud Bali tourist attraction has astonished many visitors who always want to return
                                </div>
                                <div class="flex space-x-4 mb-5 text-sm font-medium">
                                    <div class="flex-auto flex space-x-4">
                                        <button class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-violet-800"
                                            type="submit">
                                            Book Now
                                        </button>
                                        <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                            class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-slate-900 dark:text-white hover:bg-violet-800 hover:border-none hover:text-white"
                                            type="button">
                                            Check Availability
                                        </button>
                                    </div>

                                    <button
                                        class="flex-auto h-10 px-6 font-semibold rounded-full text-slate-200 border border-slate-500 dark:text-white hover:bg-violet-800 hover:border-none">
                                        Masukkan Keranjang
                                        <a href="#cartpage"></a>
                                    </button>

                                    <button
                                        class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-200  hover:text-violet-600"
                                        type="button" aria-label="Like">
                                        <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                            <path fill-rule="evenodd" cliprule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-300" >
                                    Free welcome drink, mask, and lunch.
                                </p>
                            </form>
                        </div>

                        <<!-- =================== CONTENT 2 ======================== -->

                        <div class="md:flex font-sans pt-8">
                            <div class="md:shrink-0">
                                <img src="https://i.pinimg.com/564x/ed/4f/d0/ed4fd019f8557c71b72df37b3b77feed.jpg"
                                    alt="" class="h-48 w-full md:h-full md:w-56 inset-0 wfull` object-cover rounded-lg hover:"
                                    loading="lazy" />
                            </div>
                            <form class="p-6">
                                <div class="flex flex-wrap">
                                    <h1 class="flex-auto font-medium text-slate-900 dark:text-white">
                                        Heaven's Gate Lempuyang 
                                    </h1>
                                    <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                        Rp. 50.000
                                    </div>
                                    <div class="text-sm font-medium text-slate-400">
                                        Not Available
                                    </div>
                                </div>
                                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-violet-600 dark:text-white">
                                First, one of the most visited tourist attractions in Bali is Lempuyang, both visited by tourists
                                    local or international tourists.
                                    The Lempuyang Bali tourist attraction with the gates of heaven has amazed many visitors who always want to take pictures with a view of the Agung mountain
                                    I want to go back
                                </div>
                                <div class="flex space-x-4 mb-5 text-sm font-medium">
                                    <div class="flex-auto flex space-x-4">
                                        <button class="h-10 px-6 font-semibold rounded-full text-slate-900 border border-slate-500 dark:text-white hover:text-white hover:bg-slate-500"
                                            type="submit">
                                            Book Now
                                        </button>
                                        <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                            class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-slate-900  dark:text-white hover:bg-violet-800 hover:border-none hover:text-white"
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
                                        class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-200  hover:text-violet-600"
                                        type="button" aria-label="Like">
                                        <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                            <path fill-rule="evenodd" cliprule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-300">
                                    Free welcome drink, mask, and lunch.
                                </p>
                            </form>
                        </div>

                        <!-- =================== CONTENT 3 ======================== -->

                        <div class="md:flex font-sans pt-8">
                            <div class="md:shrink-0">
                                <img src="https://i.pinimg.com/564x/1e/f6/3b/1ef63b79d76006b03ff0e3085d6e8bc2.jpg"
                                    alt="" class="h-48 w-full md:h-full md:w-56 inset-0 wfull` object-cover rounded-lg hover:"
                                    loading="lazy" />
                            </div>
                            <form class="p-6">
                                <div class="flex flex-wrap">
                                    <h1 class="flex-auto font-medium text-slate-900 dark:text-white">
                                        Calonarang Traditional Culture
                                    </h1>
                                    <div class="w-full flex-none mt-2 order-1 text-3xl fontbold text-violet-600">
                                        Rp. 200.000
                                    </div>
                                    <div class="text-sm font-medium text-violet-600">
                                        Available
                                    </div>
                                </div>
                                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-violet-600 dark:text-white">
                                First, one of the most visited traditional cultural tourist attractions in Bali is Calonanang, both visited by tourists
                                    local or international tourists.
                                    The traditional tourism object of the Calonarang Balinese tradition with sacred ceremonial rituals, namely calling randa visitors who always want to watch with a very sacred atmosphere
                                    I want to come back
                                </div>
                                <div class="flex space-x-4 mb-5 text-sm font-medium">
                                    <div class="flex-auto flex space-x-4">
                                        <button class="h-10 px-6 font-semibold rounded-full bg-violet-600 text-white hover:bg-violet-800"
                                            type="submit">
                                            Book Now
                                        </button>
                                        <button data-bs-toggle="modal" data-bstarget="#exampleModalLg"
                                            class="h-10 px-6 font-semibold rounded-full border border-slate-500 text-slate-900  dark:text-white hover:bg-violet-800 hover:border-none hover:text-white"
                                            type="button">
                                            Check Availability
                                        </button>
                                    </div>
                                    <button
                                        class="flex-auto h-10 px-6 font-semibold rounded-full text-slate-300 border border-slate-500 dark:text-white hover:bg-violet-800 hover:border-none">
                                        Masukkan Keranjang
                                        <a href="#keranjang"></a>
                                    </button>
                                    <button
                                        class="flex-none flex items-center justify-center w-9 h9 rounded-full text-violet-200  hover:text-violet-600"
                                        type="button" aria-label="Like">
                                        <svg width="20" height="20" fill="currentColor" ariahidden="true">
                                            <path fill-rule="evenodd" cliprule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                        </svg>
                                    </button>
                                </div>
                                <p class="text-sm text-slate-500 dark:text-slate-300">
                                    Free welcome drink, mask, and lunch.
                                </p>
                            </form>
                        </div>
                        <div class=" font-sans pt-8 text-center">
                            <!-- Previous Button -->
                            <a href="#previous"
                                class="inline-flex items-center py-2 px-4 text-sm fontmedium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-slate-600 hover:text-white dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray700 dark:hover:text-white">
                                Previous

                            </a>
                            <!-- Next Button -->
                            <a href="#next"
                                class="inline-flex items-center py-2 px-4 ml-3 text-sm fontmedium text-gray-500 bg-white rounded-lg border border-violet-600 hover:bg-violet-600 hover:text-white dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray700 dark:hover:text-white">
                                Next
                            </a>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    {{-- modal form untuk cek availibility --}}
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-xhidden overflow-y-auto"
        id="exampleModalLg" tabindex="-1" arialabelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col wfull pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                @include('frontpage.calendar')
            </div>
        </div>
    </div>
</div>