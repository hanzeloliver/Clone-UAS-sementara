<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Karier dan Sistem Magang</title>
    <style>
        .gallery-img {
            max-width: 100%;
            height: auto;
            cursor: pointer;
            margin: 10px;
        }
        .company-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
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
        }
        .close-modal {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @include('partials.header')
    <section id="karier" class="container my-5">
        <h2 class="text-center mb-4">Karier dan Sistem Magang</h2>
        <p class="text-center">SMK Informatika Dasana Indah menyediakan peluang karier dan sistem magang di perusahaan-perusahaan terkemuka untuk mempersiapkan siswa menuju dunia kerja.</p>
        
        <h3 class="mt-5">Perusahaan Mitra</h3>
        <div class="company-gallery">
            <img src="Gambar/company1.jpg" alt="PT. Teknologi Cerdas" class="gallery-img img-thumbnail">
            <img src="Gambar/company2.jpg" alt="PT. Inovasi Digital" class="gallery-img img-thumbnail">
            <img src="Gambar/company3.jpg" alt="PT. Data Komputasi" class="gallery-img img-thumbnail">
        </div>

        <h3 class="mt-5">Testimoni Alumni</h3>
        <blockquote class="blockquote text-center">
            <p class="mb-0">"Berkat SMK Informatika Dasana Indah, saya bisa bekerja di salah satu perusahaan IT ternama!"</p>
            <footer class="blockquote-footer">John Doe, Alumni 2020</footer>
        </blockquote>
    </section>

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