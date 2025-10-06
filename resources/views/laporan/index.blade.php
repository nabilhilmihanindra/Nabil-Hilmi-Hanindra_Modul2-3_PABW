<!DOCTYPE html>
<html>
<head>
    <title>Laporan Saya</title>
</head>
<body>
    <h2>Daftar Laporan Saya</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
        </tr>
        @foreach($laporan as $l)
        <tr>
            <td>{{ $l['id'] }}</td>
            <td>{{ $l['judul'] }}</td>
            <td>{{ $l['deskripsi'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
