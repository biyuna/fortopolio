<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];

$kode = $_GET['kd'];

$hapus = mysql_query("DELETE FROM petugas WHERE kd_petugas='$kode'") or die(mysql_error());
if ($hapus){
	header("location:petugas.php");
} else {
	header("location:petugas.php");
}


?>

<?php
} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>