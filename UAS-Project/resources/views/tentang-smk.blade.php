<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Tentang SMK</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #tentang-smk {
            padding: 2rem;
            background-color: #f8f9fa;
        }
        #tentang-smk h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        #tentang-smk p {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .image-gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }
        .image-slider {
            display: flex;
            overflow: hidden;
            max-width: 100%;
            height: auto;
            position: relative;
        }
        .image-slider img {
            display: none;
            width: 100%;
            border-radius: 8px;
            transition: opacity 0.5s ease;
        }
        .image-slider img.visible {
            display: block;
            opacity: 1;
        }
        .slider-controls {
            margin-top: 1rem;
        }
        .slider-controls button {
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .slider-controls button:hover {
            background-color: #0056b3;
        }
        @media (max-width: 767px) {
            .slider-controls button {
                font-size: 0.9rem;
                padding: 0.4rem 0.8rem;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')
    <section id="tentang-smk">
        <h2>Visi dan Misi</h2>
        <p>Visi: Menjadi lembaga pendidikan kejuruan unggulan yang mencetak generasi profesional di bidang teknologi informasi dan komunikasi, berkarakter, dan siap bersaing di era global.</p>
        <p>Misi: Menyelenggarakan pendidikan berbasis teknologi informasi yang inovatif untuk mencetak siswa berkarakter unggul, berkompeten, dan siap menghadapi tantangan dunia kerja.</p>

        <h2>Fasilitas</h2>
        <div class="image-gallery">
            <div class="image-slider">
                <img src="{{ asset('images/image1.jpg') }}" alt="Lab Komputer" class="visible">
                <img src="{{ asset('images/image2.jpg') }}" alt="Perpustakaan">
                <img src="{{ asset('images/image3.jpg') }}" alt="Lapangan Olahraga">
            </div>
            <div class="slider-controls">
                <button id="prev">Prev</button>
                <button id="next">Next</button>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        const images = document.querySelectorAll('.image-slider img');
        let currentIndex = 0;

        function updateSlider(index) {
            images.forEach((img, i) => {
                img.classList.toggle('visible', i === index);
            });
        }

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider(currentIndex);
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateSlider(currentIndex);
        });
    </script>
</body>
</html>