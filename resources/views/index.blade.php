<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyewaan</title>
</head>
<body>
    <h1>Data Penyewaan</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Penyewa</th>
                <th>Barang</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($penyewaan as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['penyewa'] }}</td>
                    <td>{{ $data['barang'] }}</td>
                    <td>{{ $data['tanggal'] }}</td>
                    <td>{{ $data['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>