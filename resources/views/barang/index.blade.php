<h2 align="center">Data Barang</h2>

<center><a href="/barang/create">+ Tambah</a></center>

<table border="1" align="center">
<tr><th>No</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>

@foreach($data as $i)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $i->nama_barang }}</td>
<td>{{ $i->harga }}</td>
<td>{{ $i->stok }}</td>
<td>
<a href="/barang/{{ $i->id }}/edit">E</a>
<form style="display:inline" method="POST" action="/barang/{{ $i->id }}">
@csrf @method('DELETE')
<button>H</button>
</form>
</td>
</tr>
@endforeach
</table>