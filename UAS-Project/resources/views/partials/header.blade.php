<header class="bg-primary text-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <!-- Logo -->
            <a href="#" class="logo d-flex align-items-center text-white text-decoration-none">
                <img src="{{ asset('Gambar/images(1).jpeg') }}" alt="SMK Informatika Logo" class="me-2" style="width: 50px; height: auto;">
                <span>SMK INFORMATIKA DASANA INDAH</span>
            </a>

            <!-- Navigation -->
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('tentang-smk') }}">Tentang SMK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pembelajaran') }}">Pembelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('sekolah-kami') }}">Sekolah Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pendaftaran') }}">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('kehidupan-siswa') }}">Kehidupan Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('karier') }}">Karier</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>