@extends('layouts.app')

@section('content')
<section id="pendaftaran">
    <h2>Formulir Pendaftaran</h2>
    <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
        @csrf
        <label>Nama Lengkap:</label><input type="text" name="nama" required><br>
        <label>Umur:</label><input type="number" name="umur" required><br>
        <label>Tanggal Lahir:</label><input type="date" name="tgl_lahir" required><br>
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label>No. HP:</label><input type="text" name="no_hp" required><br>
        <label>Asal Sekolah:</label><input type="text" name="asal_sekolah" required><br>
        <label>Foto Ijazah:</label><input type="file" name="ijazah" accept="image/*" required><br>
        <button type="submit">Daftar</button>
    </form>
</section>
@endsection
