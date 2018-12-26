<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'admin_utama') {

	$admin = $_SESSION['kd_user'];

$kd_user=$_POST['kd_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level_user=$_POST['level_user'];

$update = mysql_query(" UPDATE user SET nama = '$nama', username = '$username',  password = '$password', level_user = '$level_user' WHERE kd_user = '$kd_user'");
if ($update){
	header("location:user.php?pesan=berhasil");
} else {
	header("location:user.php?pesan=gagal");
}


} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>