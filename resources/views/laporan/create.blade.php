<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan</title>
</head>
<body>
    <h2>Form Buat Laporan</h2>
    <form action="{{ route('laporan.store') }}" method="post">
        @csrf
        Judul: <input type="text" name="judul"><br><br>
        Deskripsi: <textarea name="deskripsi"></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

