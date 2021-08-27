<?php
include "koneksi.php";

$npm = $_POST ['npm'];
$nama = $_POST ['nama'];
$angkatan = $_POST ['angkatan'];

$simpan = mysqli_query ($koneksi, "insert into tdmahasiswa values ($npm', '$nama', '$angkatan')");

if ($simpan) {
	echo "<script> alert ('Data Berhasil Di Simpan')</scrip>";
	header ("refresh:0;index.php");
}else{
	echo "<script> alert ('Data Tidak Berhasil Di Simpan')</scrip>";
	header ("refresh:0;index.php");

}


?>