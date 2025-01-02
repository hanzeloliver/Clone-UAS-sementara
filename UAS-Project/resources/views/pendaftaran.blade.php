<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Pendaftaran</title>
    <style>
        /* General Styles */
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form Container */
        #pendaftaran {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
        }

        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        /* Adjust button styles if needed */
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
    @include('partials.header') <!-- Include Header -->

    <!-- Main Content Section -->
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
                <label for="asal_sekolah" class="form-label">Asal Sekolah:</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ijazah_smp" class="form-label">Foto Ijazah:</label>
                <input type="file" name="ijazah_smp" id="ijazah_smp" accept=".jpg,.jpeg,.png,.pdf" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Daftar</button>
        </form>        
    </section>

    @include('partials.footer') <!-- Include Footer -->
</body>
</html>
