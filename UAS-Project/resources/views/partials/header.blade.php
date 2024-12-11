<header class="bg-primary text-white fixed-top">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <!-- Navbar (Mobile friendly with hamburger menu) -->
            <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex align-items-center">
                <!-- Menu button (for mobile) on the left -->
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Logo -->
                <a href="{{ route('home') }}" class="logo d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('Gambar/images(1).jpeg') }}" alt="SMK Informatika Logo" class="me-2" style="width: 50px; height: auto;">
                    <span class="text-white">SMK INFORMATIKA DASANA INDAH</span>
                </a>                

                <!-- Collapsible Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto flex-wrap">
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
                </div>
            </nav>

            <!-- WhatsApp Icon on the far-right -->
            <a href="https://wa.me/6281234567890" class="btn btn-success d-flex align-items-center ms-3" target="_blank" rel="noopener">
                <i class="fab fa-whatsapp fa-lg me-2"></i>
                WhatsApp
            </a>
        </div>
    </div>
</header>