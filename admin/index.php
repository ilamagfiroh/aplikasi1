<?php include ('koneksi.php');
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data event</title>
</head>
	<center><h2>data event</h2></center>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
<body>

	<header><h2>daftar event</h2></header>
	<center><nav><a href="v_form.php"><button>tambah baru</button></a></nav></center>
	<br>
	<table border="1" cellpadding="8" align="center" bgcolor="white">
	<thread>
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Tindakan</th>
	</tr>
</thread>
<body>
	<?php
	$sql = "SELECT * FROM pendaftaran_event";
	$query = mysqli_query($koneksi,$sql);
	while ($pendaftaran_event = mysqli_fetch_array($query)){
	echo "<tr>";
	echo "<td>".$pendaftaran_event['id']."</td>";
	echo "<td>".$pendaftaran_event['nama']."</td>";
	echo "<td>".$pendaftaran_event['email']."</td>";
	echo "<td>".$pendaftaran_event['tanggal_lahir']."</td>";
	echo "<td>".$pendaftaran_event['alamat']."</td>";
	echo "<td>";
	echo "<a href ='edit.php?id=".$pendaftaran_event['id']."'>edit</a> | ";
	echo "<a href ='hapus.php?id=".$pendaftaran_event['id']."'>hapus</a> |";
	
	}
	?>
</body>
	</table>
	<p>Total:
		<?php echo mysqli_num_rows($query) ?>
		<br>
		<center><nav><a href="/PKL_dataevent/data.php"><button>logout</button></a></nav></center></p>

</body>
</html>