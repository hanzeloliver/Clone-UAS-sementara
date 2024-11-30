@extends('layouts.app')

@section('content')
<section id="karier">
    <h2>Karier dan Sistem Magang</h2>
    <p>SMK Informatika Dasana Indah menyediakan peluang karier dan sistem magang di perusahaan-perusahaan terkemuka untuk mempersiapkan siswa menuju dunia kerja.</p>
    
    <h3>Perusahaan Mitra</h3>
    <div class="company-gallery">
        <img src="images/company1.jpg" alt="PT. Teknologi Cerdas" class="gallery-img">
        <img src="images/company2.jpg" alt="PT. Inovasi Digital" class="gallery-img">
        <img src="images/company3.jpg" alt="PT. Data Komputasi" class="gallery-img">
    </div>

    <h3>Testimoni Alumni</h3>
    <blockquote>
        <p>"Berkat SMK Informatika Dasana Indah, saya bisa bekerja di salah satu perusahaan IT ternama!"</p>
        <footer>- John Doe, Alumni 2020</footer>
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
@endsection
