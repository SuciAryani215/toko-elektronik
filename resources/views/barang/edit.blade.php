<h3>Edit Barang</h3>

<form action="/barang/{{ $data->id }}" method="POST">
@csrf
@method('PUT')

<input name="nama_barang" value="{{ $data->nama_barang }}"><br><br>
<input name="harga" value="{{ $data->harga }}"><br><br>
<input name="stok" value="{{ $data->stok }}"><br><br>

<button>Update</button>
</form>

<a href="/barang">Kembali</a>