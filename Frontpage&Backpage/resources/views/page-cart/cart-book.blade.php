<x-app-layout>
    <!-- component -->
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

    <section class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 h-screen px-4" x-data="app">
        <div class="flex flex-col justify-center h-full">
            <!-- Table -->
            <div class="w-full max-w-2xl mx-auto bg-gray-200 dark:bg-gray-900 shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <div class="font-semibold text-gray-800 dark:text-gray-100">Keterangan Pembayaran</div>
                </header>

                <div class="overflow-x-auto p-3">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 dark:text-gray-100">
                            <tr>
                                <th></th>
                                <th class="p-2">
                                    <div class="font-semibold text-left"> Pesanan </div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-left">Jumlah</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-left">Harga</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Hapus</div>
                                </th>
                            </tr>
                        </thead>
                        {{-- @foreach ($data as $d)
                        {{dd($d)}} --}}
                        <tbody class="text-sm divide-y divide-gray-100">
                            <!-- record 1 -->
                            <tr>
                                <td class="p-2">
                                    <input type="checkbox" class="w-5 h-5" value="id-1"
                                        @click="toggleCheckbox($el, 100.000)" />
                                </td>
                                <td class="p-2">
                                    <div class="font-medium text-gray-800 dark:text-gray-100">
                                        Kecak Fire Gianyar
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">1</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left font-medium text-green-500">
                                        Rp100.000
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <button>
                                            <svg class="w-8 h-8 hover:text-red-600 rounded-full hover:bg-gray-100 p-1"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                           
                            <!-- record 2 -->
                            <tr>
                                <td class="p-2">
                                    <input type="checkbox" class="w-5 h-5" value="id-2"
                                        @click="toggleCheckbox($el, 200.000)" />
                                </td>
                                <td class="p-2">
                                    <div>
                                        <div class="font-medium text-gray-800 dark:text-gray-200">Gunung Batur</div>
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">1</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left font-medium text-green-500">
                                        Rp200.000
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <button>
                                            <svg class="w-8 h-8 hover:text-red-600 rounded-full hover:bg-gray-100 p-1"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- record 3 -->
                            <tr>
                                <td class="p-2">
                                    <input type="checkbox" class="w-5 h-5" value="id-3"
                                        @click="toggleCheckbox($el, 20.000)" />
                                </td>
                                <td class="p-2">
                                    <div>
                                        <div class="font-medium text-gray-800 dark:text-gray-200">Pura Tanah Lot
                                    </div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">1</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left font-medium text-green-500">Rp20.000</div>
                                </td>
                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <button>
                                            <svg class="w-8 h-8 hover:text-red-600 rounded-full hover:bg-gray-100 p-1"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- total amount -->
                <div class="flex justify-end font-bold space-x-4 text-2xl border-t border-gray-100 px-5 py-4">
                    <div>Total</div>
                    <div class="text-blue-600">Rp
                        <span x-text="total.toFixed(2)"></span></div>
                </div>

                <div class="flex justify-end">
                    <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                    <input type="hidden" class="border border-black bg-gray-50" x-model="selected" />
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("app", () => ({
                total: 0,
                selected: [],

                toggleCheckbox(element, amount) {
                    if (element.checked) {
                        this.selected.push(element.value);
                        this.total += amount;
                    } else {
                        const index = this.selected.indexOf(element.value);

                        if (index > -1) this.selected.splice(index, 1);

                        this.total -= amount;
                    }
                },
            }));
        });
    </script>
</x-app-layout>
