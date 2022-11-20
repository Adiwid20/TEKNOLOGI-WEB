<x-admin-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Math') }}
        </h2>
    </x-slot>
<div class=" text-white font-sans">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <div class="ml-2 w-full antialiased bg-gradient-to-r from-slate-400 to-violet-500 rounded shadow-lg p-8 mx-96">
                <span class="block w-full text-2xl uppercase font-bold mb-10 text-center">Hasil</span>
                <!-- <div class="mb-4 md:w-full">
                    <label for="sequence1" class="block text-ss mb-1 md:w-full">Input Sequence 1</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        id="seq1" />
                    <small class="text-red-600" id="err_seq1"></small>
                </div>
                <div class="mb-4 md:w-full">
                    <label for="sequence2" class="block text-s mb-1 md:w-full">Input Sequence 2</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        id="seq2" />
                    <small class="text-red-600" id="err_seq2"></small>
                </div>
                <div class="mb-4 md:w-full">
                    <label for="number" class="block text-s mb-1 md:w-full">Input Limit Number</label>
                    <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                        id="limit" />
                    <small class="text-red-600" id="err_limit"></small>
                </div> -->
                <div class="mb-4 md:w-full">
                    <div class="block text-s mb-1 md:w-full">Jumlah</div>
                    <div class="w-full border rounded p-5">
                        <p class="break-normal text-justify -m-3" id="result"> {{ $jumlah }}</p>
                    </div>
                </div>
                <div class="mb-4 md:w-full">
                    <div class="block text-s mb-1 md:w-full">Kurang</div>
                    <div class="w-full border rounded p-5">
                        <p class="break-normal text-justify -m-3" id="result">{{ $kurang }} </p>
                    </div>
                </div>
                <div class="mb-4 md:w-full">
                    <div class="block text-s mb-1 md:w-full">Kali</div>
                    <div class="w-full border rounded p-5">
                        <p class="break-normal text-justify -m-3" id="result">{{ $kali }}</p>
                    </div>
                </div>
                <div class="mb-4 md:w-full">
                    <div class="block text-s mb-1 md:w-full">Bagi</div>
                    <div class="w-full border rounded p-5">
                        <p class="break-normal text-justify -m-3" id="result">{{ $bagi }}</p>
                    </div>
                </div>
                <!-- <div class="flex md:w-full justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold my-5 mx-2 px-4 py-2 rounded"
                        id="submit">
                        Submit
                    </button>
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white uppercase text-sm font-semibold my-5 mx-5 px-4 py-2 rounded"
                        id="reset">
                        Reset
                    </button>
                </div> -->
        </div>
    </div>
</div>
</x-admin-layout>