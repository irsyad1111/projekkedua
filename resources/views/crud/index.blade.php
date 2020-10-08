<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    Filter:
    <a href="/crud/?kategori=barang">Barang</a>
    <a href="/crud/?kategori=minuman">Minuman</a>
<form action="{{ url()->current() }}">
    <div class="col-md-11">
        <input type="text" name="keyword" class="form-control" placeholder="Search users...">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary">
            Search
        </button>
    </div>
</form>
<table border="1">
    <thead>
    <tr>
    <th>Kode</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($produk as $item)
    <tr>
    <td>{{$item->kode_produk}}</td>
    <td>{{$item->nama}}</td>
    <td>{{$item->kategori}}</td>
    <td>{{$item->harga}}</td>
    <td>
    <a href="{{ url ('hapus')}}"><button>Hapus</button></a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    Halaman : {{ $produk->currentPage() }} <br/>
    Jumlah Data : {{ $produk->total() }} <br/>
    Data Per Halaman : {{ $produk->perPage() }} <br/>
</body>
{{ $produk->links() }}
</html>
