<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Tentang SMK</title>
</head>
<body>
    @include('partials.header')
    <section id="tentang-smk">
        <h2>Visi dan Misi</h2>
        <p>Visi: Membentuk generasi ahli IT yang berkompetensi tinggi.</p>
        <p>Misi: Memberikan pendidikan berbasis teknologi terbaik.</p>

        <h2>Fasilitas</h2>
        <div class="image-gallery">
            <div class="image-slider">
                <img src="path/to/image1.jpg" alt="Lab Komputer">
                <img src="path/to/image2.jpg" alt="Perpustakaan">
                <img src="path/to/image3.jpg" alt="Lapangan Olahraga">
            </div>
            <div class="slider-controls">
                <button id="prev">Prev</button>
                <button id="next">Next</button>
            </div>
        </div>
    </section>

    <script>
        const images = document.querySelectorAll('.image-slider img');
        let currentIndex = 0;

        document.getElementById('next').addEventListener('click', () => {
            images[currentIndex].classList.remove('visible');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('visible');
        });

        document.getElementById('prev').addEventListener('click', () => {
            images[currentIndex].classList.remove('visible');
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            images[currentIndex].classList.add('visible');
        });
    </script>
</body>
</html>
