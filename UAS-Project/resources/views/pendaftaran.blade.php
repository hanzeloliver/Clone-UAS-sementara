<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Pendaftaran</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Form Container */
        #pendaftaran {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
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

        input[type="text"], input[type="number"], input[type="date"], select, input[type="file"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
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

        /* Responsive Styles */
        @media (max-width: 768px) {
            #pendaftaran {
                padding: 15px;
            }

            h2 {
                font-size: 1.5rem;
            }

            input[type="text"], input[type="number"], input[type="date"], select, input[type="file"], button {
                font-size: 1rem;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')
    <section id="pendaftaran">
        <h2>Formulir Pendaftaran</h2>
        <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required><br>

            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur" required><br>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required><br>

            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>

            <label for="no_hp">No. HP:</label>
            <input type="text" name="no_hp" id="no_hp" required><br>

            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" required><br>

            <label for="ijazah_smp">Foto Ijazah:</label>
            <input type="file" name="ijazah_smp" id="ijazah_smp" accept=".jpg,.jpeg,.png,.pdf" required><br>

            <button type="submit">Daftar</button>
        </form>        
    </section>

    @include('partials.footer')
</body>
</html>