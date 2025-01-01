<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Home | SMK Informatika Dasana Indah</title>
    <!-- Add this line to link the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')
    <!-- Home Slider Section -->
    <section class="home-slider">
        <div class="slider">
            <div class="slide">Selamat Datang di SMK Informatika</div>
            <div class="slide">Mencetak Generasi Informatika</div>
            <div class="slide">Bergabunglah dengan Kami!</div>
        </div>

        <!-- Navigation Arrows -->
        <div class="slider-nav">
            <button class="prev" aria-label="Previous slide">&#10094;</button>
            <button class="next" aria-label="Next slide">&#10095;</button>
        </div>
    </section>

    <!-- Home Section Starts -->
    <section class="home bg-primary text-white text-center py-5" id="home" style="background-image: url('{{ asset('Gambar/images.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <h3 class="display-4">Motivasi</h3>
            <p class="lead">"Setiap langkah kecil dalam belajar adalah awal dari inovasi besar di masa depan."</p>
        </div>
    </section>
    <!-- Home Section Ends -->

    <!-- About Section Starts -->
    <section class="about py-5" id="about">
    <div class="container">
        <h1 class="heading text-center mb-4">Identitas Kami</h1>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="/Gambar/463290798_8471650582926041_6715114587561835296_n.jpg" alt="" class="img-fluid mb-3">
                <img src="/Gambar/about-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>THIS SCHOOL BEST ON THE APPLICATION</h3>
                <p>SMK Informatika Dasana Indah adalah salah satu sekolah menengah kejuruan unggulan yang berlokasi di kawasan Dasana Indah, Tangerang. Sekolah ini memiliki fokus utama pada pendidikan teknologi informasi dan komunikasi, menyediakan berbagai program keahlian seperti Rekayasa Perangkat Lunak (RPL), Teknik Komputer dan Jaringan (TKJ), serta Desain Multimedia.</p>
                <p id="more-text">Dengan dukungan tenaga pengajar profesional dan fasilitas modern, SMK Informatika Dasana Indah berkomitmen untuk menghasilkan lulusan yang siap bersaing di dunia industri dan memiliki kemampuan untuk menghadapi tantangan era digital. Selain itu, sekolah ini juga aktif dalam berbagai kegiatan ekstrakurikuler, seperti coding club, robotik, dan olahraga, guna mengembangkan bakat serta potensi siswa secara menyeluruh.</p>
                <button id="read-more-btn" class="btn btn-primary">Read More</button>
            </div>
        </div>
    </div>
</section>
    <!-- About Section Ends -->

    <!-- Subjects Section Starts -->
    <section class="subjects py-5 bg-light">
        <div class="container">
            <h1 class="heading text-center mb-4">Our Popular Subjects</h1>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <img src="/Gambar/subject-1.png" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">Development</h3>
                            <p class="card-text">Fun & Challenging</p>
                        </div>
                    </div>
                </div>
                <!-- Add more subject cards if needed -->
            </div>
        </div>
    </section>
    <!-- Subjects Section Ends -->

    @include('partials.footer')

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        let currentIndex = 0;
        let intervalId;

        function goToNextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlider();
        }

        function goToPrevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlider();
        }

        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function startAutoSlide() {
            stopAutoSlide(); // Prevent multiple intervals
            intervalId = setInterval(goToNextSlide, 5000);
        }

        function stopAutoSlide() {
            if (intervalId) {
                clearInterval(intervalId);
            }
        }

        // Event listeners for buttons
        nextBtn.addEventListener('click', () => {
            stopAutoSlide();
            goToNextSlide();
            startAutoSlide();
        });

        prevBtn.addEventListener('click', () => {
            stopAutoSlide();
            goToPrevSlide();
            startAutoSlide();
        });

        // Start auto-sliding when page loads
        startAutoSlide();

        // Optional: Pause sliding when hovering over slider
        slider.addEventListener('mouseenter', stopAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);
    });

    document.addEventListener('DOMContentLoaded', () => {
        const readMoreBtn = document.getElementById('read-more-btn');
        const moreText = document.getElementById('more-text');

        // Logika tombol Read More
        readMoreBtn.addEventListener('click', () => {
            if (moreText.style.maxHeight) {
                moreText.style.maxHeight = null; // Tutup teks
                readMoreBtn.textContent = 'Read More';
            } else {
                moreText.style.maxHeight = 'none'; // Tetap buka, meskipun tidak ada tambahan teks
                readMoreBtn.textContent = 'Read More';
            }
        });
    });

    </script>
</body>
</html>