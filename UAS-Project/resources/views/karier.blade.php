<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Karier dan Sistem Magang</title>
    <style>
        #karier {
            padding: 2rem;
            background-color: #f8f9fa;
        }
        #karier h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        #karier p {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .gallery-specific {
            max-width: 100%;
            height: auto;
            cursor: pointer;
            margin: 10px;
        }
        .company-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        @media (max-width: 767px) {
            .company-gallery {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')
    
    <section id="karier">
        <h2 class="text-center mb-4">Karier dan Sistem Magang</h2>
        <p class="text-center">SMK Informatika Dasana Indah menyediakan peluang karier dan sistem magang di perusahaan-perusahaan terkemuka untuk mempersiapkan siswa menuju dunia kerja.</p>
        
        <h3 class="mt-5 text-center">Perusahaan Mitra Group</h3>
        <div class="company-gallery">
            <img src="Gambar/company1.png" alt="PT. Teknologi Cerdas" class="gallery-specific img-thumbnail">
            <img src="Gambar/company4.png" alt="PT. Inovasi Digital" class="gallery-specific img-thumbnail">
            <img src="Gambar/company5.png" alt="PT. Data Komputasi" class="gallery-specific img-thumbnail">
        </div>

        <h3 class="mt-5 text-center">Testimoni Alumni</h3>
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
