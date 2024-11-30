<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Informatika</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('tentang-smk') }}">Tentang SMK</a>
            <a href="{{ route('pembelajaran') }}">Pembelajaran</a>
            <a href="{{ route('sekolah-kami') }}">Sekolah Kami</a>
            <a href="{{ route('pendaftaran') }}">Pendaftaran</a>
            <a href="{{ route('kehidupan-siswa') }}">Kehidupan Siswa</a>
            <a href="{{ route('karier') }}">Karier</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
