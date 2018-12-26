<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];


$id_stockpc=$_POST['id_stockpc'];
$merek_pc=$_POST['merek_pc'];
$os=$_POST['os'];
$status=$_POST['status'];


$update = mysql_query("UPDATE stock_pc SET merek_pc='$merek_pc', os='$os', status='$status' WHERE id_stockpc='$id_stockpc'");
if ($update){
	header("location:stockpc.php");
} else {
	header("location:stockpc.php");
}


} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>