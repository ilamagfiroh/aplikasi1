<?php
include ("koneksi.php");
if (isset($_GET['id'])) {
	$title ="edit";
	$url ='proses_edit.php';
	$id =$_GET['id'];
	//buat query untuk ambil data dari database
	$sql ="SELECT * FROM pendaftaran_event WHERE id =$id";
	$query =mysqli_query($koneksi,$sql);
	$pendaftaran_event =mysqli_fetch_assoc($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) <1) {
		die ("data tidak ditemukan...");}
		//url jika edit data
}else{
	$title ="add";
	//url jika tambah data 
	$url ='proses_pendaftaran.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>formulir peserta event</title>
	<link rel="stylesheet" type="text/css" href="stylevform.css">

</head>
<body>
	<header><h3>formulir peserta</h3></header>
	<form action="proses_pendaftaran.php" method ="POST">
		<fieldset>
			<legend><h2>form peserta</h2></legend>
			<div>
				<label for ='id'>id:</label><br>
				<input type="" name="id" value="<?php if (isset ($_GET['id'])){echo $pendaftaran_event['id'];}?>">
			</div>
				<label for ='nama'>nama:</label><br>
				<input type="" name="nama" value="<?php if (isset ($_GET['id'])){echo $pendaftaran_event['nama'];}?>">	
			</div>
			<div>
				<label for='email'>email:</label><br>
				<input type="" name="email" value="<?php if (isset ($_GET['id'])){echo $pendaftaran_event['email'];}?>">
			</div>
			<div>
				<label for='tanggal_lahir'>tanggal lahir:</label><br>
				<input type="date" name="tanggal_lahir" value="<?php if (isset ($_GET['id'])){echo $pendaftaran_event['tanggal_lahir'];}?>">
			</div>
			<div>
				<label for='alamat'>alamat:</label><br>
				<textarea name="alamat" row="5" > <?php if (isset ($_GET['id'])){echo $pendaftaran_event['alamat'];}?></textarea>
				<hr>
				<div>
					<input type="submit" name="simpan" value="simpan"/>
				
			</div>	
		</fieldset>
	</form>
</body>
</html> 
	
	