<?php 
require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

	// cek apakah data berhasil di tambahkan atau tidak
if( tambah($_POST) > 0 ) {
	echo "
		<script>
			alert('data berhasil ditambahan');
			document.location.href = 'index.php';
			</script>
			";
	echo "data berhasil ditambahkan";
} else {
	echo "<script>
			alert('data gagal ditambahan');
			document.location.href = 'index.php';
		 </script>
			";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>tambah data produk</title>
</head>
<body>
	<h1>tambah data produk</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nrp">nama Produk</label>
				<input type="text" name="nama_produk" id="nama_produk">
			</li>
			<li>
				<label for="nama">keterangan</label>
				<input type="text" name="keterangan" id="keterangan">
			</li>
			<li>
				<label for="email">Harga</label>
				<input type="number" name="harga" id="harga">
			</li>
			<li>
				<label for="jurusan">Jumlah</label>
				<input type="number" name="jumlah" id="jumlah">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>