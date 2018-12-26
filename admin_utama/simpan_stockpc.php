<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];

$kd_ruangan=$_POST['kd_ruangan'];
$nama_ruangan=$_POST['nama_ruangan'];



$cekkode = mysql_query("SELECT * FROM ruangan WHERE kd_ruangan='$kd_ruangan'") or die(mysql_error());
while ($data = mysql_fetch_array($cekkode)) {
	$kodelama = $data['kd_ruangan'];
}

if ($kd_ruangan == $kodelama){
	header("location:ruangan.php?pesan=kodesama");
} else {

$simpan = mysql_query("INSERT INTO ruangan values('$kd_ruangan', '$nama_ruangan' )");
if ($simpan){
	header("location:stockpc.php?pesan=berhasilsimpan");
} else {
	header("location:stockpc.php?pesan=gagalsimpan");
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