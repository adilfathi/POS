<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        padding: 1px;
        border-spacing: 1px;
    }
</style>

<body>
    <h1>Data User</h1>
    <a href="user/tambah">+ Tambah User</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
            <th>Kodel Level</th>
            <th>Nama Level</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level->level_kode ?? ''}}</td>
                <td>{{ $d->level->level_nama ?? ''}}</td>
                <td><a href="/user/ubah/{{ $d->user_id }}">Edit</a>|<a href="/user/hapus/{{ $d->user_id }}">Hapus</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
