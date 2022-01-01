<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url("siswa/store") }}" method="post">
        @csrf
        <label for="">NIS:</label>
        <input type="text" name="nis"><br>

        <label for="">Nama:</label>
        <input type="text" name="nama"><br>

        <label for="">Alamat:</label>
        <input type="text" name="alamat"><br>

        <label for="">No. telepon:</label>
        <input type="text" name="no_telp"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>