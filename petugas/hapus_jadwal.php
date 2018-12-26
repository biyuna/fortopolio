<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['hak_akses'] == 'admin_utama') {

	$admin = $_SESSION['id_admin'];

$kode = $_GET['kd'];

$hapus = mysql_query("DELETE FROM jadwal_perawatan WHERE id_jadwal='$kode'") or die(mysql_error());
if ($hapus){
	$hapus2 = mysql_query("DELETE FROM det_jadwal_perawatan WHERE id_jadwal='$kode'") or die(mysql_error());
	if ($hapus2){
	header("location:jadwal.php?pesan=berhasilhapus");
	} else {
	header("location:jadwal.php?pesan=gagalhapus");
	}
} else {
}



?>

<?php
} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>