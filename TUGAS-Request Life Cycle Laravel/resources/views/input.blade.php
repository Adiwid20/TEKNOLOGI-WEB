<x-admin-layout>

<div class=" text-white font-sans">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <div class="ml-2 w-full antialiased bg-gradient-to-r from-slate-400 to-violet-500 rounded shadow-lg p-8 mx-96">
            <form class="form" method="POST" action="/aritmatika">
                @csrf
                <span class="block w-full text-2xl font-bold mb-10 text-left">Aritmatika</span>
                <div class="md:w-full">
                    <label for="bil1" class="block text-ss mb-1 md:w-full">Number 1</label>
                    <input class="text-gray-800 w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        name="bil1" />
                    <small class="text-red-600" id="err_seq1"></small>
                </div>
                <div class="mb-4 md:w-full">
                    <label for="bil2" class="block text-s mb-1 md:w-full">Number 2</label>
                    <input class="text-gray-800 w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        name="bil2" />
                    <small class="text-red-600" id="err_seq2"></small>
                </div>
                <!-- <div class="mb-4 md:w-full">
                    <label for="number" class="block text-s mb-1 md:w-full">Input Limit Number</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        id="limit" />
                    <small class="text-red-600" id="err_limit"></small>
                </div>
                <div class="mb-4 md:w-full">
                    <div class="block text-s mb-1 md:w-full">Result</div>
                    <div class="w-full border rounded p-5">
                        <p class="break-normal text-justify -m-3" id="result"></p>
                    </div>
                </div> -->
                <div class="flex md:w-full justify-center">
                    <button
                        class="antialiased bg-gradient-to-r from-violet-500 to-violet-900 text-white uppercase text-sm font-semibold my-5 mx-2 px-4 py-2 rounded"
                        id="submit">
                        Result
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
</x-admin-layout>