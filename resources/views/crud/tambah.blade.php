<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/simpan">
    @csrf
        <label>Kode Produk</label>
        <input name="kode_produk" kode="kode_produk"></input>
        <label>Nama</label>
        <input name="nama" kode="nama"></input>
        <label>Harga</label>
        <input name="harga" kode="harga"></input>
        <label>Kategori</label>
        <input name="kategori" kode="kategori"></input>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
