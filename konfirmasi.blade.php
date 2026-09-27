<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LaporBanjir - Konfirmasi Laporan</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #eafaf1;
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
            width: 420px;
        }
        h1 {
            color: #1b5e20;
            font-size: 22px;
            margin-bottom: 5px;
        }
        p.subtitle {
            color: #555;
            font-size: 13px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        td {
            padding: 10px 6px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }
        td.label {
            font-weight: 600;
            color: #333;
            width: 45%;
        }
        .badge {
            display: inline-block;
            margin-top: 20px;
            background: #e8f5e9;
            color: #1b5e20;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 13px;
        }
        a.btn-back {
            display: inline-block;
            margin-top: 22px;
            width: 100%;
            box-sizing: border-box;
            padding: 11px;
            background: #1b5e20;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }
        a.btn-back:hover {
            background: #0e3d10;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Laporan Banjir</h1>
        <p class="subtitle">Berikut ringkasan data laporan banjir Anda:</p>

        <table>
            <tr>
                <td class="label">Nama Pelapor</td>
                <td>{{ $nama_pelapor }}</td>
            </tr>
            <tr>
                <td class="label">Lokasi Kejadian</td>
                <td>{{ $lokasi }}</td>
            </tr>
            <tr>
                <td class="label">Tinggi Genangan Air</td>
                <td>{{ $tinggi_genangan }} cm</td>
            </tr>
        </table>

        <a href="{{ route('laporbanjir.form') }}" class="btn-back">Kirim Laporan Lain</a>
    </div>
</body>
</html>