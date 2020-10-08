<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($item as $item)
    <form  action="{{url('simpanedit/'.$item->id)}}" method="POST">
    @csrf
        <label>Kode Produk</label>
        <input name="kode_produk" kode="kode_produk" value="{{$item->kode_produk}}"></input>
        <label>Nama</label>
        <input name="nama" kode="nama" value="{{$item->nama}}"></input>
        <label>Harga</label>
        <input name="harga" kode="harga" value="{{$item->harga}}"></input>
        <label>Kategori</label>
        <input name="kategori" kode="kategori" value="{{$item->kategori}}"></input>
        <button type="submit">Simpan</button>
    </form>
    @endforeach
</body>
</html>
