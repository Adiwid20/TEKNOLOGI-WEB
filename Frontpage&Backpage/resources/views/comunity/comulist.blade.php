<x-admin-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{-- {{ title }} --}}
    </h2>



    <div>
        <div class="">
            <div class="shadow px-6 py-4 bg-white dark:bg-gray-900 rounded sm:px-1 sm:py-1 ">
                <div class="grid grid-cols-12">
                    <div class="col-span-6 p-4">
                        <!-- menampilkan url untuk menampilkan halaman input petani -->

                        <button
                            class="px-4 py-1 text-sm rounded text-gray-900 dark:text-white font-semibold border border-green200 hover:text-white hover:bg-indigo-600 hover:border-transparent focus:outlinenone">Publish</button>
                        <a href="{{ route('create') }}">
                            <button
                                class="px-4 py-1 text-sm rounded text-white font-semibold bg-green-500 hover:text-white hover:bg-green-600 hover:border-transparent focus:outlinenone">Tambah</button>
                        </a>
                        <button
                            class="px-4 py-1 text-sm rounded text-white font-semibold bg-red-500 hover:text-white hover:bg-red-600 focus:outlinenone">Delete</button>
                    </div>
                    {{-- <div class="col-span-6 p-4 flex justify-end">
                            <input type="text"
                                class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 roundednone rounded-l-md sm:text-sm border-gray-300">
                            <button
                                class="rounded-r-md border border-l-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray500 text-blue-600 hover:text-white hover:bg-blue-600">
                                Cari</button>
                        </div> --}}
                </div>
                {{-- <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        </div>
                    </div> --}}
                <div class="overflow-x-auto  shadow-md sm:rounded-lg dark:bg-gray-900 ">
                    <div class="flex justify-between items-center mt-16 pb-4">
                        <div>
                            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                type="button">
                                <svg class="mr-2 w-4 h-4 text-gray-400" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Last 30 days
                                <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownRadio"
                                class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownRadioButton">
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-1" type="radio" value=""
                                                name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-1"
                                                class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                day</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input checked="" id="filter-radio-example-2" type="radio"
                                                value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-2"
                                                class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                7 days</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-3" type="radio" value=""
                                                name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-3"
                                                class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                30 days</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-4" type="radio" value=""
                                                name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-4"
                                                class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                month</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-5" type="radio" value=""
                                                name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-5"
                                                class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                year</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-900 dark:text-gray-200">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-200">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="pb-4">ALL</div>
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="py-3 px-8 px-full m-4">
                                    Image
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Community Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Deskripsi
                                </th>

                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $d)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                    {{-- <img class="w-36 h-36 rounded m-4"
                                                src="/img/packages/{{ $d->img_package }}.png" alt="Extra large avatar"> --}}
                                </td>
                                {{-- <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        null
                                    </th> --}}
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $d->comunity_id }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $d->comunity_name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $d->comunity_descriptions }}
                                </td>
                               
                              

                                <td class="py-3 px-6 text-center">
                                    {{-- VIEW --}}
                                    <div class="flex item-center justify-center">
                                        <button class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                ">

                                            </svg>
                                        </button>
                                        {{-- EDIT --}}
                                        <button class="w-4 mr-2 transform hover:text-gray-100 hover:scale-110">
                                            {{-- <a href="{{ route('edit', $d->id_package) }}"> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                            </a>
                                        </button>
                                        {{-- Delete --}}
                                        {{-- <form action="{{ route('destroy') }}" method='POST'>
                                                    @csrf @method('DELETE')
                                                   <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                   </div>
                                                </form> --}}
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 font-medium text-gray-800">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left uppercase tracking-wider">
                                    Name 
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left uppercase tracking-wider">
                                    Community
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left uppercase tracking-wider">
                                    Price
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left uppercase tracking-wider">
                                    Price
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/2 text-left py-3 px-4">Fakultas Teknik dan Kejuaruan</td>
                                <td class="w-1/3 text-left py-3 px-4"></td>
                                <td class="w-1/3  text-left py-3 px-4">Fa<a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                                href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/2 text-left py-3 px-4">Fakultas Olahraga dan Kesehatan</td>
                                <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>  
                            </tr>
                            <tr>
                                <td class="w-1/2 text-left py-3 px-4">Fakultas Hukum dan Ilmu Sosial</td>
                                <td class="w-1/3 text-left py-3 px-4">Williams</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>  
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/2 text-left py-3 px-4">Fakultas Matematika dan Ilmu Pengetahuan Alam </td>
                                <td class="w-1/3 text-left py-3 px-4">Brown</td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="tel:622322662">622322662</a></td>
                                <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                        href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                                            <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                            href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>  
                            </tr>
                        </tbody>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $no = 1; ?>
                            @foreach ($package as $item)
                                <tr>
                                    <td>
                                        <input type="text">
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table> --}}
            </div>
        </div>
    </div>

</x-admin-layout>
