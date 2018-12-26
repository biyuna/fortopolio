<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'user') {

	$admin = $_SESSION['id_jadwal'];


$id_jadwal = $_POST['id_jadwal'];
$tgl_perawatan = $_POST['tgl_perawatan'];
$hari_perawatan = $_POST['hari_perawatan'];
$kd_petugas = $_POST['kd_petugas'];
$status_perawatan = $_POST['status_perawatan'];
$kd_ruangan = $_POST['kd_ruangan'];
$no_komputer = $_POST['no_komputer'];
$pemakai = $_POST['pemakai'];
$keterangan = $_POST['keterangan'];


$update1 = mysql_query("UPDATE jadwal_perawatan SET tgl_perawatan='$tgl_perawatan', hari_perawatan='$hari_perawatan', kd_petugas='$kd_petugas', status_perawatan = '$status_perawatan ' WHERE id_jadwal='$id_jadwal'");
if ($update1){
	header("location:jadwal.php?pesan=berhasilsimpan");
} else {
	header("location:jadwal.php?pesan=gagalsimpan");
}

$update2 = mysql_query("UPDATE det_jadwal_perawatan SET kd_ruangan='$kd_ruangan', no_komputer = '$no_komputer ' , pemakai='$pemakai', keterangan='$keterangan' WHERE id_jadwal='$id_jadwal'");
if ($update2){
	header("location:jadwal.php?pesan=berhasilsimpan");
} else {
	header("location:jadwal.php?pesan=gagalsimpan");
}

} else {
	echo "<script>
	location.href='../index.php';
	</script>";
	exit(); }
?>