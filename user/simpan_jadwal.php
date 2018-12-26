<?php 
include 'koneksi.php';
session_start();
if ($_SESSION['level_user'] == 'user') {

	$admin = $_SESSION['id_admin'];

$id_jadwal=0;
$tgl_perawatan=$_POST['tgl_perawatan'];
$hari_perawatan=$_POST['hari_perawatan'];
$kd_petugas=$_POST['kd_petugas'];
$status_perawatan=$_POST['status_perawatan'];
$kd_ruangan=$_POST['kd_ruangan'];
$no_komputer=$_POST['no_komputer'];
$pemakai=$_POST['pemakai'];
$keterangan=$_POST['keterangan'];

if($tgl_perawatan == "" || $kd_petugas == "" || $kd_ruangan == "" ) {
	header("location:jadwal.php?pesan=datakosong");
} else {


$cekkode = mysql_query("SELECT * FROM jadwal_perawatan WHERE tgl_perawatan='$tgl_perawatan'") or die(mysql_error());
while ($data = mysql_fetch_array($cekkode)) {
	$tgl_perawatan_lama = $data['tgl_perawatan'];
}

if ($tgl_perawatan == $tgl_perawatan_lama){
	header("location:jadwal.php?pesan=kodesama");
} else {

$simpan = mysql_query("INSERT INTO jadwal_perawatan values('$id_jadwal', '$tgl_perawatan', '$hari_perawatan', '$kd_petugas', '$status_perawatan')");
if ($simpan){
	$simpan2 = mysql_query("INSERT INTO det_jadwal_perawatan values('$id_jadwal', '$kd_ruangan', '$no_komputer', '$pemakai', '$keterangan')");

	header("location:jadwal.php?pesan=berhasilsimpan");
} else {
	header("location:jadwal.php?pesan=gagalsimpan");
}
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