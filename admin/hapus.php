<?php
include("koneksi.php");
if(isset($_GET['id']))
	//ambil nis dari query string
	$id = $_GET['id'];
	//buat query hapus
	$sql = "DELETE FROM pendaftaran_event WHERE id=$id";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	//apakah query update berhasil?
	if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
		header('location:index.php?status=sukses');
	}else
		//kalau gagal, alihkan ke halaman index.php dengan status = gagal
		header('location:index.php?status=gagal');

		die("akses dilarang...");
	
?>