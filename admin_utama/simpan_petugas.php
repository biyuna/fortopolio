<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];


$kd_petugas=$_POST['kd_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$jk=$_POST['jk'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$staff=$_POST['staff'];
$alamat=$_POST['alamat'];
$no_tlpn=$_POST['no_tlpn'];
$email=$_POST['email'];
$password=$_POST['password'];


$cekkode = mysql_query("SELECT * FROM petugas WHERE kd_petugas='$kd_petugas'") or die(mysql_error());
while ($data = mysql_fetch_array($cekkode)) {
	$kodelama = $data['kd_petugas'];
}

if ($kd_petugas == $kodelama){
	header("location:petugas.php?pesan=kodesama");
} else {

$pass = md5($password);
$simpan = mysql_query("INSERT INTO petugas values('$kd_petugas', '$nama_petugas', '$jk', '$tmp_lahir', '$tgl_lahir', '$staff', '$alamat', '$no_tlpn', '$email', '$pass')");
if ($simpan){
	header("location:petugas.php?pesan=berhasilsimpan");
} else {
	header("location:petugas.php?pesan=gagalsimpan");
}
}


?>

<?php
} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>