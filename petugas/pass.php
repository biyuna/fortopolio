<?php 
include 'header.php';
?>

 <div class="col-md-2">
		<div class="row">
				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="img/grahasegara.jpg">
					</a>
				</div>
					
		</div>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Dashboard </a></li>			
			<li><a href="jadwal.php"><span class="glyphicon glyphicon-briefcase"></span> Data Jadwal </a></li>
			<li><a href="ruangan.php"><span class="glyphicon glyphicon-briefcase"></span> Data Ruangan </a></li>
			<li class="active"><a href="pass.php"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
			<li><a onClick="return confirm('Anda yakin ingin logout!')" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">

<h3><span class="glyphicon glyphicon-briefcase"></span>  Password</h3>
<br/><br/>
<?php 
if(isset($_GET['pesan'])){
	$pesan=mysql_real_escape_string($_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Password gagal di ganti !!     Periksa Kembali Password yang anda masukkan !!</div>";
	}else if($pesan=="tdksama"){
		echo "<div class='alert alert-warning'>Password yang anda masukkan tidak sesuai  !!     silahkan ulangi !! </div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'>Password yang anda masukkan tidak sesuai  !!     silahkan ulangi !! </div>";
	}
}
?>

<br/>
<div class="col-md-5 col-md-offset-3">
	<form action="simpan_pass.php" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="<?php echo $_SESSION['nama']; ?>">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>




</div>