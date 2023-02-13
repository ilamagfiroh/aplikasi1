<?php
include("koneksi.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
	// ambil data dari form
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email =$_POST['email'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	// buat query update
	$sql = "UPDATE pendaftaran_event SET nama='$nama',email = '$email' ,tanggal_lahir ='$tanggal_lahir',alamat='$alamat' WHERE id = $id";
	$query = mysqli_query($koneksi,$sql)or die (mysqli_error($koneksi));
	//apakah update berhasil
	if ($query){
		// kalau berhasil , alihkan ke halaman index.php dengan status = sukses
		header('location:v_form.php?status=sukses');
	}else{
		// kalau gagal , alihkan ke halaman index.php dengan status = gagal
		header('location:v_form.php?status=gagal'); 
	}
		die("akses dilarang...");
	}
?>