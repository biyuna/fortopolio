<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'admin_utama') {

	$admin = $_SESSION['kd_petugas'];


$kd_petugas=$_POST['kd_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$jk=$_POST['jk'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$staff=$_POST['staff'];
$alamat=$_POST['alamat'];
$no_tlpn=$_POST['no_tlpn'];
$email=$_POST['email'];


$update = mysql_query("UPDATE petugas SET nama_petugas='$nama_petugas', jk='$jk', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', staff='$staff', alamat='$alamat', no_tlpn='$no_tlpn', email='$email' WHERE kd_petugas='$kd_petugas'");
if ($update){
	header("location:petugas.php");
} else {
	header("location:petugas.php");
}


} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>