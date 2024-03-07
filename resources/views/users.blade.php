<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<style>
    table,th,td {
        border: 1px solid black;
        padding: 1px;
        border-spacing: 1px;
    }
</style>

<body>
    <h1>Data User</h1>
    <table>
        <tr>
            <th>Jumlah</th>
            {{-- <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th> --}}
        </tr>
            <tr>
                <td>{{$data}}</td>
                {{-- <td>{{$data ->username}}</td>
                <td>{{$data ->nama}}</td>
                <td>{{$data ->level_id}}</td> --}}
            </tr>
    </table>
</body>

</html>
