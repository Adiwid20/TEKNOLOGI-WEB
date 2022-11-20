<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ ('Score') }}
        </h2>
    </x-slot>

    <div class="antialiased bg-gradient-to-r from-violet-500 to-violet-900 flex flex-wrap">
        <!-- Indentity Form -->
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-white text-2xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Indentity Form
            </p>
            <form class="form" method="POST" action="">
                <div class=" mx-10 leading-loose">


                    <div class="p-10 bg-white rounded shadow-xl">
                        <div class="">
                            <label class="block text- text-slate-800" for="name">Name</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name"
                                type="text" required="" placeholder="Your Name" aria-label="Name">
                        </div>
                        <div class="">
                            <label class="block text- text-slate-800" for="name">NIM</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nim" name="nim"
                                type="text" required="" placeholder="Your NIM" aria-label="NIM">
                        </div>

                        <div class="mt-2">
                            <label class="block text-sm text-slate-800" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email"
                                type="text" required="" placeholder="@undiksha" aria-label="Email">
                        </div>
                        <div class="mt-2">
                            <label class=" block text-sm text-slate-800" for="message">Message</label>
                            <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message"
                                name="message" rows="6" required="" placeholder="Your inquiry.."
                                aria-label="Email"></textarea>
                        </div>
                        <div class="mt-6">
                            <button
                                class="px-4 py-1  text-white font-light tracking-wider antialiased bg-gradient-to-r from-violet-500 to-violet-900 rounded"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Check Score Form -->
        <div class=" text-white text-2xl lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Check Score Form
            </p>
            
                <div class="mx-10 leading-loose">
                    <div class="p-6 bg-white rounded shadow-xl">
                        <p class="text-lg text-gray-800 font-medium pb-4">Academic Value</p>
                        
                        <!-- 1 -->
                        <div class="mt-2">
                            <label for="ip1" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 1 </label>
                            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                name="ip1" />
                            <small class="text-red-600" id="err_seq1"></small>
                        </div>
                        <!-- 2 -->
                        <div class="mt-2">
                            <label for="ip2" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 2 </label>
                            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                name="ip2" />

                        </div>
                        <!-- 3 -->
                        <div class="mt-2">
                            <label for="ip3" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 3 </label>
                            <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                name="ip3" />
                            <!-- 4 -->
                            <div class="mt-2">
                                <label for="ip4" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 4
                                </label>
                                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                    name="ip4" />
                            </div>
                            <!-- 5 -->
                            <div class="mt-2">
                                <label for="ip5" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 5
                                </label>
                                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                    name="ip5" />
                            </div>
                            <!-- 6 -->
                            <div class="mt-2">
                                <label for="ip6" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 6
                                </label>
                                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                    name="ip6" />
                            </div>
                            <!-- 7 -->
                            <div class="mt-2">
                                <label for="ip7" class="block text-gray-600 text-sm mb-1 md:w-full">IP Semester 7
                                </label>
                                <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="number"
                                    name="ip7" />
                            </div>
                            <p class="text-lg text-gray-800 font-medium py-4">IPK Study information</p>
                            <div class="">
                                <button
                                    class="px-4 py-1 text-white font-light tracking-wider antialiased bg-gradient-to-r from-violet-500 to-violet-900 rounded"
                                    type="submit">Submit</button>
                            </div>
            </form>
        </div>
        <p class="py-10 px-10 text-right text-sm text-slate-200">
            Source: <a class="underline"
                href="https://tailwindcomponents.com/component/checkout-form">https://tailwindcomponents.com/component/checkout-form</a>
        </p>
    </div>
    </div>
</x-admin-layout>