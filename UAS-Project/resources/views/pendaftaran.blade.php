<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Pendaftaran</title>
    <style>
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #pendaftaran {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    @include('partials.header')

    <section id="pendaftaran" class="container my-5">
        <h2>Formulir Pendaftaran</h2>
        <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="umur" class="form-label">Umur:</label>
                <input type="number" name="umur" id="umur" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select name="gender" id="gender" class="form-select" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No. HP:</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tahun_lulus_smp" class="form-label">Tahun Lulus SMP:</label>
                <input type="number" name="tahun_lulus_smp" id="tahun_lulus_smp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama_orangtua" class="form-label">Nama Orang Tua:</label>
                <input type="text" name="nama_orangtua" id="nama_orangtua" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="no_hp_orangtua" class="form-label">No. HP Orang Tua:</label>
                <input type="text" name="no_hp_orangtua" id="no_hp_orangtua" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="daerah_asal" class="form-label">Daerah Asal:</label>
                <input type="text" name="daerah_asal" id="daerah_asal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jenjang_pendidikan_terakhir" class="form-label">Jenjang Pendidikan Terakhir:</label>
                <input type="text" name="jenjang_pendidikan_terakhir" id="jenjang_pendidikan_terakhir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tahun_masuk" class="form-label">Tahun Masuk:</label>
                <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah:</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="negara_asal_sekolah" class="form-label">Negara Asal Sekolah:</label>
                <input type="text" name="negara_asal_sekolah" id="negara_asal_sekolah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kota_asal_sekolah" class="form-label">Kota Asal Sekolah:</label>
                <input type="text" name="kota_asal_sekolah" id="kota_asal_sekolah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ijazah_smp" class="form-label">Upload Ijazah SMP:</label>
                <input type="file" name="ijazah_smp" id="ijazah_smp" accept=".jpg,.jpeg,.png,.pdf" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Daftar</button>
        </form>
    </section>

    @include('partials.footer')
</body>
</html>
