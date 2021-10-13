<?php 

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

$prdk
 = query("SELECT * FROM produk WHERE id = $id")[0];

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
// var_dump($prdk
// );
	// cek apakah data berhasil di ubah atau tidak
if( ubah($_POST) > 0 ) {
	echo "
		<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
			</script>
			";
	
	echo "data berhasil ditambahkan";
} else {
	echo "<script>
			alert('data gagal diubah');
			document.location.href = 'index.php';
		 </script>
			";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data produk</title>
</head>
<body>
	<h1>ubah data produk</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $prdk["id"]; ?>">
		<ul>
			<li>
				<label for="nama_produk">Nama Produk</label>
				<input type="text" name="nama_produk" id="nama_produk" value="<?= $prdk
				["nama_produk"]; ?>">
			</li>
			<li>
				<label for="keterangan">Keterangan</label>
				<input type="text" name="keterangan" id="keterangan" value="<?= $prdk
				["keterangan"]; ?>">
			</li>
			<li>
				<label for="harga">Harga</label>
				<input type="number" name="harga" id="harga" value="<?= $prdk
				["harga"]; ?>">
			</li>
			<li>
				<label for="jumlah">Jumlah</label>
				<input type="number" name="jumlah" id="jumlah" value="<?= $prdk
				["jumlah"]; ?>">
			</li>
				<button type="submit" name="submit">ubah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>