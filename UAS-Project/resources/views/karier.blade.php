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
        
        <h3 class="mt-5">Perusahaan Mitra Group</h3>
        <div class="company-gallery">
            <img src="Gambar/company1.png" alt="PT. Teknologi Cerdas" class="gallery-img img-thumbnail">
            <img src="Gambar/company4.png" alt="PT. Inovasi Digital" class="gallery-img img-thumbnail">
            <img src="Gambar/company5.png" alt="PT. Data Komputasi" class="gallery-img img-thumbnail">
        </div>

        <h3 class="mt-5">Testimoni Alumni</h3>
        <div id="testimoni-container" class="text-center">
            <!-- Placeholder jika tidak ada alumni -->
            <p id="no-alumni" class="text-muted">Saat ini belum ada testimoni dari alumni.</p>
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
        
        document.addEventListener('DOMContentLoaded', function() {
    const alumniTestimonials = []; // Array kosong untuk testimoni
    
    const testimoniContainer = document.getElementById('testimoni-container');
    const noAlumni = document.getElementById('no-alumni');

    // Jika tidak ada testimoni
    if (alumniTestimonials.length === 0) {
        noAlumni.style.display = 'block';
    } else {
        noAlumni.style.display = 'none';

        // Tambahkan testimoni secara dinamis
        alumniTestimonials.forEach(testimoni => {
            const blockquote = document.createElement('blockquote');
            blockquote.classList.add('blockquote', 'text-center');
            blockquote.innerHTML = `
                <p class="mb-0">"${testimoni.message}"</p>
                <footer class="blockquote-footer">${testimoni.name}, ${testimoni.year}</footer>
            `;
            testimoniContainer.appendChild(blockquote);
        });
    }
});

    </script>
</body>
</html>