<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Kehidupan Siswa</title>
    <style>
        h2, h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    @include('partials.header')

    <section id="kehidupan-siswa" class="container my-5">
        <div class="text-center mb-4">
            <h2>Kehidupan Siswa</h2>
            <p>Di SMK Informatika Dasana Indah, siswa menikmati lingkungan belajar yang mendukung kreativitas, inovasi, dan kerja tim. Berikut adalah momen-momen berharga siswa kami:</p>
        </div>

        <!-- Photo Gallery -->
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <img src="Gambar/siswa1.jpg" alt="Kegiatan Kelas" class="gallery-img img-fluid w-100">
            </div>
            <div class="col-12 col-md-4">
                <img src="Gambar/siswa2.jpeg" alt="Pembelajaran" class="gallery-img img-fluid w-100">
            </div>
            <div class="col-12 col-md-4">
                <img src="Gambar/acarasekolah.jpg" alt="Acara" class="gallery-img img-fluid w-100">
            </div>
        </div>

        <div class="text-center mt-4">
            <h3>Guru dan Siswa</h3>
            <p>Siswa kami didukung oleh guru-guru profesional yang selalu bersemangat dalam mengajar dan membimbing siswa mencapai potensinya.</p>
        </div>
    </section>

    @include('partials.footer')

    <script>
        document.querySelectorAll('.gallery-img').forEach(img => {
            img.addEventListener('click', () => {
                const modal = document.createElement('div');
                modal.classList.add('modal', 'd-flex', 'justify-content-center', 'align-items-center', 'bg-dark', 'bg-opacity-75');
                modal.style.position = 'fixed';
                modal.style.top = '0';
                modal.style.left = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.zIndex = '1050';
                modal.innerHTML = `
                    <div class="position-relative">
                        <img src="${img.src}" class="modal-img img-fluid">
                        <span class="close-modal position-absolute">&times;</span>
                    </div>`;
                document.body.appendChild(modal);

                document.querySelector('.close-modal').addEventListener('click', () => {
                    modal.remove();
                });

                modal.addEventListener('click', (e) => {
                    if (e.target === modal) modal.remove();
                });
            });
        });
    </script>
</body>
</html>
