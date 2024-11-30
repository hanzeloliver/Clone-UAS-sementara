<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Home | SMK Informatika Dasana Indah</title>
</head>
<body>
    @include('partials.header')

    <section class="home-slider">
        <div class="slider">
            <div class="slide">Selamat Datang di SMK Informatika</div>
            <div class="slide">Mencetak Generasi Informatika</div>
            <div class="slide">Bergabunglah dengan Kami!</div>
        </div>
    </section>

    <script>
        const slides = document.querySelectorAll('.slide');
        let index = 0;

        function nextSlide() {
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active');
        }

        setInterval(nextSlide, 3000);
    </script>
</body>
</html>
