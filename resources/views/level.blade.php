<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Level Pengguna</title>
</head>
<style>
    table,th,td {
        border: 1px solid black;
        padding: 1px;
        border-spacing: 1px;
    }
</style>

<body>
    <h1>Data tabel Pengguna</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{$d ->level_id}}</td>
                <td>{{$d ->level_kode}}</td>
                <td>{{$d ->level_nama}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
