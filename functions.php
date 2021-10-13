<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "arkademy");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;
}

function tambah($data) {
	global $conn;
	// ambil data dari tiap element dalam form
	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);

	// query insert data
	$query = "INSERT INTO produk 
				VALUES
			('', '$nama_produk', '$keterangan', '$harga', '$jumlah')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM produk where id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	// ambil data dari tiap element dalam form
	$id = $data["id"];
	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$harga = htmlspecialchars($data["harga"]);
	$jumlah = htmlspecialchars($data["jumlah"]);


	
	// query insert data
	$query = "UPDATE produk SET 
				nama_produk = '$nama_produk',
				keterangan = '$nama',
				harga = $harga,
				jumlah = '$jumlah'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>