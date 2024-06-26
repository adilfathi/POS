<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Ubah</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">
        @csrf
        @method('PUT')

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" value="{{$data->username}}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{$data->nama}}">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password" value="{{$data->password}}">
        <br> <!-- tambahkan ini untuk memisahkan input Password dan Level ID -->
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{$data->level_id}}">
        <br>
        <input type="submit" value="Simpan" class="btn btn-success">
    </form>
</body>
</html>
