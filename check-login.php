<?php 
session_start();

include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);
$query=mysql_query("SELECT * FROM user WHERE username='$username' and password='$pass'")or die(mysql_error());
if(mysql_num_rows($query)){
	while ($row = mysql_fetch_array($query)) {
	$_SESSION['kd_user']=$row['kd_user'];	
	$_SESSION['nama']=$row['nama'];
	$_SESSION['username']=$row['username'];
	$_SESSION['level_user']=$row['level_user'];

	if ($_SESSION['level_user'] == "admin_utama") {
		header("location:admin_utama/home.php");
	}
	else if ($_SESSION['level_user'] == "petugas") {
		header("location:petugas/home.php");
	}
	else if ($_SESSION['level_user'] == "user") {
		header("location:user/home.php");
	}
	else {
		echo '<script>href.location</script>';
		session_destroy();
	}
}



}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pass;
 ?>