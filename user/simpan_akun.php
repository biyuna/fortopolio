<?php
	include 'koneksi.php';
	$id = 0;
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level_user = $_POST['level_user'];
	$user_lama = "";
	if($nama == "" || $username == "" || $password == "" || $level_user == "") {
		header("location:setting.php?pesan=kosong");
	} else {

	$cekuser = mysql_query("SELECT * FROM users WHERE username = '$username'");
	while ($data = mysql_fetch_array($cekuser)){
	$user_lama = $data['username'];
	}

	if ($username == $user_lama){
		header("location:setting.php?pesan=userada");
	} else {
		
		$md5 = md5($password);
		$simpan = mysql_query("INSERT INTO users VALUES('$id','$nama','$username','$md5','$level_user')")or die(mysql_error());
	if($simpan) {
		header("location:setting.php?pesan=berhasil");
	} else {
		header("location:setting.php?pesan=gagal");
			}
		}
	}
?>