<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.head')
    <title>Pembayaran Siswa</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('partials.header') <!-- Header -->

    <!-- Bagian Konten Utama -->
    <div class="container">
        <h2>Pembayaran Siswa</h2>
        <form method="POST" action="{{ route('pembayaran.store') }}">
            @csrf

            <!-- Data Siswa yang Sudah Terdaftar -->
            <input type="hidden" name="student_id" value="{{ auth()->user()->id }}"> <!-- ID siswa yang login -->

            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" id="nama" value="{{ auth()->user()->name }}" readonly required>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="{{ auth()->user()->email }}" readonly required>

            <label for="nominal">Nominal Pembayaran (Rp):</label>
            <input type="number" name="nominal" id="nominal" required>

            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select name="metode_pembayaran" id="metode_pembayaran" required>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="E-Wallet">E-Wallet</option>
            </select>

            <button type="submit">Bayar</button>
        </form>
        <div class="link">
            <p>Kembali ke <a href="{{ route('home') }}">Beranda</a></p>
        </div>
    </div>

    @include('partials.footer') <!-- Footer -->
</body>
</html>