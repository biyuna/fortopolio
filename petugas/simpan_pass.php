<?php 
include 'koneksi.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

$cek=mysql_query("select * from user where password='$lama' and nama='$user'");
if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysql_query("update user set password='$b' where nama='$user'");
		header("location:pass.php?pesan=oke");
	}else{
		header("location:pass.php?pesan=tdksama");
	}
}else{
	header("location:pass.php?pesan=gagal");
}

 ?>