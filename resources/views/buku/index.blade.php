
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    data buku
    <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Juduk</th>
            <th>penulis</th>
            <th>penerbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['judul'] }}</td>
                    <td>{{ $item['penulis'] }}</td>
                    <td>{{ $item['penerbit'] }}</td>
                    <td>{{ $item['tahun_terbit'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>