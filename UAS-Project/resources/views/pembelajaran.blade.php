<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Pembelajaran</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #pembelajaran {
            padding: 2rem;
            background-color: #f8f9fa;
        }
        #pembelajaran h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        #pembelajaran p {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.2rem;
        }
        #pembelajaran h3 {
            margin-top: 2rem;
            font-size: 1.8rem;
            text-align: center;
        }
        #pembelajaran ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        #pembelajaran ul li {
            font-size: 1.2rem;
            margin: 0.5rem 0;
        }
        .praktikum-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 2rem;
        }
        .gallery-img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        @media (min-width: 768px) {
            .gallery-img {
                width: calc(33.333% - 20px);
            }
        }
        @media (max-width: 767px) {
            .gallery-img {
                width: calc(50% - 20px);
            }
        }
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }
        .modal-img {
            max-width: 90%;
            max-height: 80%;
            border-radius: 8px;
        }
        .close-modal {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    @include('partials.header')
    <section id="pembelajaran">
        <h2>Akademik & Sistem Sekolah</h2>
        <p>SMK Informatika Dasana Indah memiliki program pembelajaran yang berfokus pada teknologi informasi dan komunikasi, serta pembentukan karakter siswa yang kompeten dan profesional.</p>
        
        <h3>Pengajaran</h3>
        <div class="praktikum-gallery">
            <img src="{{ asset('Gambar/siswa3.jpg') }}" alt="Pembelajaran" class="gallery-img">
            <img src="{{ asset('Gambar/praktikum2.jpg') }}" alt="Robotik" class="gallery-img">
            <img src="{{ asset('Gambar/praktikum3.jpg') }}" alt="Robotik" class="gallery-img">
        </div>
    </section>

    @include('partials.footer')

    <script>
        document.querySelectorAll('.gallery-img').forEach(img => {
            img.addEventListener('click', () => {
                const modal = document.createElement('div');
                modal.classList.add('modal');
                modal.innerHTML = `<img src="${img.src}" class="modal-img"><span class="close-modal">&times;</span>`;
                document.body.appendChild(modal);

                document.querySelector('.close-modal').addEventListener('click', () => {
                    modal.remove();
                });
            });
        });
    </script>
</body>
</html>