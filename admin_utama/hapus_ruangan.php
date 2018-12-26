<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];

$kode = $_GET['kd'];

$hapus = mysql_query("DELETE FROM ruangan WHERE kd_ruangan='$kode'") or die(mysql_error());
if ($hapus){
	header("location:ruangan.php");
} else {
	header("location:ruangan.php");
}


?>

<?php
} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>