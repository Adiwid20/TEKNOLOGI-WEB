<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('universitas.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Biodata
        </a>
        <a href="{{ route('dosen.index') }}"
            class="flex items-center  text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Dosen
        </a>
        <a href="{{ route('mahasiswa.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Mahasiswa
        </a>
        {{-- <a href="{{route('matakuliah.index')}}" 
        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Matakuliah
        </a> --}}
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="calendar.html"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a>
    </nav>
  
</aside>