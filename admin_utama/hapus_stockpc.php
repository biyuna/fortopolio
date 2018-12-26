<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];

$kode = $_GET['kd'];

$hapus = mysql_query("DELETE FROM stock_pc WHERE id_stockpc='$kode'") or die(mysql_error());
if ($hapus){
	header("location:stock_pc.php");
} else {
	header("location:stock_pc.php");
}


?>

<?php
} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>