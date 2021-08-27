<html>
<head> 
	<title> Tambah Data Mahasiswa </title>
</head>
<body> 

<h3 align="center"> Form Input Mahasiswa </h3>

<form action="simpandata.php" method="post">

<table align="center" bgcolor="yellow" width=60%>
<tr>
	<td> NPM </td>
	<td> : </td>
	<td>
		<input type="text" name="npm" size="20" placeholder="Masukan NPM Anda. . .">
	</td>
</tr>	
<tr>
	<td> Nama Mahasiswa </td>
	<td> : </td>
	<td>
		<input type="text" name="nama" size="30" placeholder="Masukan Nama Anda. . .">
	</td>
</tr>	
<tr>
	<td> Angkatan </td>
	<td> : </td>
	<td>
		<select name="angkatan">
			<option value="">--Pilih Angkatan--</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
		</select>
	</td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td>
		<input type="submit" name="simpan" value="Simpan">
		<input type="reset" name="batal" value="Batal"> 
		<input type="button" name="kembali" value="Kembali" onclick="self.history.back() ">
	</td>

</tr>
</table>
</form>
</body>
</html>








