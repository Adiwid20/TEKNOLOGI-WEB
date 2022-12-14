<x-app-layout>

    @foreach ($data as $d)
    
        <div class='flex max-w-sm w-full shadow-md rounded-lg overflow-hidden mx-auto'>
            <div class="mt-24 overflow-hidden rounded-xl relative transform hover:-translate-y-2 transition ease-in-out duration-500 shadow-lg hover:shadow-2xl movie-item text-white movie-card"
                data-movie-id="438631">
                <div
                    class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent">
                </div>
                <div class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info" data-lity=""
                    href="https://www.youtube.com/embed/aSHs224Dge0">
                    <div class="poster__info align-self-end w-full">
                        <div class="h-32"></div>
                        <div class="space-y-6 detail_info">
                            <div class="flex flex-col space-y-2 inner">
                                <a class="relative flex items-center w-min flex-shrink-0 p-1 text-center text-white bg-red-500 rounded-full group-hover:bg-red-700"
                                    data-unsp-sanitized="clean">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9.555 7.168A1 1 0 0 0 8 8v4a1 1 0 0 0 1.555.832l3-2a1 1 0 0 0 0-1.664l-3-2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div
                                        class="absolute transition opacity-0 duration-500 ease-in-out transform group-hover:opacity-100 group-hover:translate-x-16 text-xl font-bold text-white group-hover:pr-2">
                                        Komu_1</div>
                                </a>
                                <h3 class="text-2xl font-bold text-white" data-unsp-sanitized="clean">
                                    {{$d->comunity_name}}
                                </h3>
                                {{-- <div class="mb-0 text-lg text-gray-400">Komunitas Travel Bali 1</div> --}}
                            </div>
                            {{-- <div class="flex flex-row justify-between datos">
                                <div class="flex flex-col datos_col">
                                    <div class="popularity">440.052</div>
                                    <div class="text-sm text-gray-400">Popularity:</div>
                                </div>
                                <div class="flex flex-col datos_col">
                                    <div class="release">2021-09-15</div>
                                    <div class="text-sm text-gray-400">Release date:</div>
                                </div>
                                <div class="flex flex-col datos_col">
                                    <div class="release">155 min</div>
                                    <div class="text-sm text-gray-400">Runtime:</div>
                                </div>
                            </div> --}}
                            <div class="flex flex-col overview">
                                <div class="flex flex-col"></div>
                                <div class="text-xs text-gray-400 mb-2">Overview:</div>
                                <p class="text-xs text-gray-100 mb-6">
                                    {{$d->comunity_descriptions}}
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <img class="absolute inset-0 transform w-full -translate-y-4"
                    src="https://www.worthview.com/wp-content/uploads/2018/05/group-travel.jpg"
                    style="filter: grayscale(0);" />
                {{-- <div class="poster__footer flex flex-row relative pb-10 space-x-4 z-10">
                    <a class="flex items-center py-2 px-4 rounded-full mx-auto text-white bg-red-500 hover:bg-red-700"
                        href="http://www.google.com/calendar/event?action=TEMPLATE&amp;dates=20210915T010000Z%2F20210915T010000Z&amp;text=Dune%20%2D%20Movie%20Premiere&amp;location=http%3A%2F%2Fmoviedates.info&amp;details=This%20reminder%20was%20created%20through%20http%3A%2F%2Fmoviedates.info"
                        target="_blank" data-unsp-sanitized="clean">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="text-sm text-white ml-2">Set reminder</div>
                    </a>
                </div> --}}
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
