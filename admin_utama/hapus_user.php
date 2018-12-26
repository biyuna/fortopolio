<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'admin_utama') {

	$admin = $_SESSION['kd_user'];

$kode = $_GET['kd_user'];

$hapus = mysql_query("DELETE FROM user WHERE kd_user='$kode'") or die(mysql_error());
if ($hapus){
	header("location:user.php?pesan=berhasil");
} else {
	header("location:user.php?pesan=gagal");
}


?>

<?php
} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>