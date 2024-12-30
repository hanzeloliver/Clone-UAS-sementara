<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Pembelajaran</title>
</head>
<body>
    @include('partials.header')
    <section id="pembelajaran">
        <h2>Akademik & Sistem Sekolah</h2>
        <p>SMK Informatika Dasana Indah memiliki program pembelajaran yang berfokus pada teknologi informasi dan komunikasi, serta pembentukan karakter siswa yang kompeten dan profesional.</p>
        
        <h3>Mata Pelajaran Utama</h3>
        <ul>
            <li>Pemrograman Dasar</li>
            <li>Pengembangan Web</li>
            <li>Jaringan Komputer</li>
            <li>Desain Grafis</li>
            <li>Manajemen Basis Data</li>
        </ul>

        <h3>Praktikum</h3>
        <div class="praktikum-gallery">
            <img src="images/praktikum1.jpg" alt="Lab Pemrograman" class="gallery-img">
            <img src="images/praktikum2.jpg" alt="Lab Jaringan" class="gallery-img">
            <img src="images/praktikum3.jpg" alt="Workshop Desain" class="gallery-img">
        </div>
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
