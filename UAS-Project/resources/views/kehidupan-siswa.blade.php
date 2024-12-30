<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Kehidupan Siswa</title>
</head>

<body>
    @include('partials.header')
    <section id="kehidupan-siswa">
        <h2>Kehidupan Siswa</h2>
        <p>Di SMK Informatika Dasana Indah, siswa menikmati lingkungan belajar yang mendukung kreativitas, inovasi, dan kerja tim. Berikut adalah momen-momen berharga siswa kami:</p>
        
        <div class="photo-gallery">
            <img src="images/siswa1.jpg" alt="Kegiatan Olahraga" class="gallery-img">
            <img src="images/siswa2.jpg" alt="Kegiatan Belajar" class="gallery-img">
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
