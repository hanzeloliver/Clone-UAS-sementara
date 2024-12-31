<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Kehidupan Siswa</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
        }

        h2, h3 {
            text-align: center;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Gallery Styles */
        .gallery-img {
            max-width: 100%;
            height: auto;
            cursor: pointer;
            margin: 10px;
            border-radius: 8px;
        }

        .photo-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* Modal Styles */
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
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .photo-gallery {
                flex-direction: column;
                align-items: center;
            }

            .gallery-img {
                max-width: 90%;
            }

            h2, h3 {
                font-size: 1.5rem;
            }

            p {
                font-size: 1rem;
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    @include('partials.header')
    <section id="kehidupan-siswa" class="container my-5">
        <h2>Kehidupan Siswa</h2>
        <p>Di SMK Informatika Dasana Indah, siswa menikmati lingkungan belajar yang mendukung kreativitas, inovasi, dan kerja tim. Berikut adalah momen-momen berharga siswa kami:</p>
        
        <div class="photo-gallery">
            <img src="images/siswa1.jpg" alt="Kegiatan Kelas" class="gallery-img">
            <img src="images/siswa2.jpg" alt="Seminar" class="gallery-img">
            <img src="images/siswa3.jpg" alt="Festival Sekolah" class="gallery-img">
        </div>

        <h3>Guru dan Siswa</h3>
        <p>Siswa kami didukung oleh guru-guru profesional yang selalu bersemangat dalam mengajar dan membimbing siswa mencapai potensinya.</p>
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