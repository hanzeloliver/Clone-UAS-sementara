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
            display: block;
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .image-slider img.visible {
            opacity: 1;
            transform: scale(1);
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
    <section id="tentang-smk" class="text-white bg-primary text-center py-5" style="background-image: url('{{ asset('Gambar/images.jpg') }}'); background-size: cover; background-position: center;">
        <h2>Visi dan Misi</h2>
        <p>Visi: Menjadi lembaga pendidikan kejuruan unggulan yang mencetak generasi profesional di bidang teknologi informasi dan komunikasi, berkarakter, dan siap bersaing di era global.</p>
        <p>Misi: Menyelenggarakan pendidikan berbasis teknologi informasi yang inovatif untuk mencetak siswa berkarakter unggul, berkompeten, dan siap menghadapi tantangan dunia kerja.</p>
    </section>    
    @include('partials.footer')
</body>
</html>