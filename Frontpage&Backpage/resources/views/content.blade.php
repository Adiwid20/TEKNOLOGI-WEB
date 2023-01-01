{{-- <tbody class="bg-white divide-y divide-gray-200">
    <!-- menggunakan foreach untuk menampilkan list array ataupun collection-->
    @foreach ($petani as $item)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center"><input type="checkbox" name="" id="">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="{{ asset($item->foto) }}" alt="">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                            <!-- Menampilkan elemen nama dari object item -->
                            {{ $item->nama }}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $item->nik }}
                        </div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $item->telp }}</div>
                <div class="text-sm text-gray-500">{{ $item->alamat }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $item->nama_kelompok }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form action="{{ route('petani.destroy', $item->id_penjual) }}" method="POST">
                    <!-- Form lengkap dengan token csrf untuk method(DELETE)-->
                    @csrf @method('DELETE')
                    <!-- link untuk edit-->
                    <a href="{{ route('petani.edit', $item->id_penjual) }}"
                        class="text-indigo600 hover:text-indigo-900">Edit</a>
                    <!-- button action untuk delete-->
                    <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin ?')"
                        type="submit">Del</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody> --}}
