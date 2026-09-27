<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LaporBanjir - Form Pelaporan</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #e8f1fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
            width: 400px;
        }
        h1 {
            color: #744b7b;
            font-size: 22px;
            margin-bottom: 5px;
        }
        p.subtitle {
            color: #555;
            font-size: 13px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 14px;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 9px 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border-color: #763376;
        }
        button {
            margin-top: 22px;
            width: 100%;
            padding: 11px;
            background: #9a0da1;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #e49cda;
        }
        .error-box {
            background: #fdecea;
            border: 1px solid #f5c6cb;
            color: #c62828;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1> Laporan Banjir</h1>
        <p class="subtitle">BPBD Kabupaten Bandung — Form Pelaporan Banjir Warga</p>

        @if ($errors->any())
            <div class="error-box">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('laporbanjir.store') }}" method="POST" onsubmit="return validasiForm()">
            @csrf

            <label for="nama_pelapor">Nama Pelapor</label>
            <input type="text" id="nama_pelapor" name="nama_pelapor">

            <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa)</label>
            <input type="text" id="lokasi" name="lokasi">

            <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
            <input type="number" step="0.1" id="tinggi_genangan" name="tinggi_genangan">

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>

    <script>
        function validasiForm() {
            const nama = document.getElementById('nama_pelapor').value.trim();
            const lokasi = document.getElementById('lokasi').value.trim();
            const tinggi = document.getElementById('tinggi_genangan').value.trim();

            if (!nama || !lokasi || !tinggi) {
                alert('Mohon lengkapi semua kolom sebelum mengirim laporan.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>