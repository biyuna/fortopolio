<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];

$kd_ruangan=$_POST['kd_ruangan'];
$nama_ruangan=$_POST['nama_ruangan'];



$update = mysql_query("UPDATE ruangan SET nama_ruangan='$nama_ruangan' WHERE kd_ruangan='$kd_ruangan'");
if ($update){
	header("location:ruangan.php");
} else {
	header("location:ruangan.php");
}


} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>