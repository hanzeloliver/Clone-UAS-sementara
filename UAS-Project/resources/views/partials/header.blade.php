<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<header class="bg-white text-black fixed-top">
    <div class="container">
        <div class="d-flex align-items-center py-3">
            <!-- Navbar (Mobile friendly with hamburger menu) -->
            <nav class="navbar navbar-expand-lg navbar-light w-100">
                <!-- Logo and Menu button container -->
                <div class="d-flex w-85 align-items-center">
                    <!-- Menu button (for mobile) on the left -->
                    <button class="navbar-toggler d-lg-none me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Logo -->
                    <a href="{{ route('home') }}" class="logo d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('Gambar/images(1).jpeg') }}" alt="SMK Informatika Logo" class="me-2" style="width: 50px; height: auto;">
                        <span class="text-black">SMK INFORMATIKA DASANA INDAH</span>
                    </a>
                </div>

                <!-- Collapsible Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto flex-wrap">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('tentang-smk') }}">Tentang SMK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('pembelajaran') }}">Pembelajaran</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('sekolah-kami') }}">Sekolah Kami</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('pendaftaran') }}">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('kehidupan-siswa') }}">Kehidupan Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('karier') }}">Karier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#">Admin Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- WhatsApp Icon on the far-right -->
            <a href="https://wa.me/6281234567890" class="btn btn-success d-flex align-items-center ms-3" target="_blank" rel="noopener">
                <i class="fab fa-whatsapp fa-lg me-2">WhatsApp</i>
            </a>
        </div>
    </div>
</header>

<!-- Space to avoid content overlap with the fixed header -->
<div style="height: 95px;"></div>
{{-- <div style="height: 128px;"></div> --}}
