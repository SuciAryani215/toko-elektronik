<h3>Tambah Barang</h3>

<form action="/barang" method="POST">
@csrf

<input name="nama_barang" placeholder="Nama"><br><br>
<input name="harga" placeholder="Harga"><br><br>
<input name="stok" placeholder="Stok"><br><br>

<button>Simpan</button>
</form>

<a href="/barang">Kembali</a>