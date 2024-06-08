<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kejahatan</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }
        .table-data th, .table-data td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }
        .table-data th {
            background-color: #002fff;
            color: white;
        }
        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-data tr:hover {
            background-color: #f5f5f5;
        }
        img {
            transform: rotate(-90deg);
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Data Kejahatan</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Photo</th>
                <th>Judul</th>
                <th>Tanggal Kejadian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proses as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <img src="{{ public_path('storage/' . $item->photo) }}" alt="Foto Pelaku" width="100" height="100">
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kejadian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
