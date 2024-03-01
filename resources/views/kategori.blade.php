<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori Barang</title>
</head>
<style>
    table,th,td {
        border: 1px solid black;
        padding: 1px;
        border-spacing: 1px;
    }
</style>

<body>
    <h1>Data tabel Kategori Barang</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{$d ->kategori_id}}</td>
                <td>{{$d ->kategori_kode}}</td>
                <td>{{$d ->kategori_nama}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
