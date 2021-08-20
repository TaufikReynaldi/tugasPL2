<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data</title>
</head>
<body>
	<h2 align="center">Data Mahasiswa Universitas</h2>
<table border="1" align="center" widht="80%">
	<tr bgcolor="yellow">
		<th>NPM</th>
		<th>Nama Mahasiswa</th>
		<th>Angkatan</th>
		<th>Alamat</th>
	</tr>
	<tr>
		<?php
			include "koneksi.php";
			$query = mysqli_query ($koneksi, "Select * From tdmahasiswa");
			while ($data = mysqli_fetch_array($query)) {
		?>
		<td><?php echo $data['NPM']; ?></td>
		<td><?php echo $data['Nama_Mahasiswa']; ?></td>
		<td><?php echo $data['Angkatan']; ?></td>
		<td><?php echo $data['Alamat']; } ?></td>
	</tr>

</table>	
</body>
</html>