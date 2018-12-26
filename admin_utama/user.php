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
			<li><a href="petugas.php"><span class="glyphicon glyphicon-briefcase"></span> Data Petugas </a></li>
			<li><a href="stockpc.php"><span class="glyphicon glyphicon-briefcase"></span> Data Stock </a></li>	
			<li class="active"><a href="user.php"><span class="glyphicon glyphicon-user"></span> Data User </a></li>
			<li><a href="pass.php"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
			<li><a onClick="return confirm('Anda yakin ingin logout!')" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">

 <h3>Data User</h3>
 <p></p>
 <center>
 	<button  class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Tambah User</button>
 </center>
 <center>
 			<div class="collapse" id="collapseExample">
			<div class="well" style="background:#FFFFFF; margin-top:30px; margin-bottom:20px; width:1000px;">
			<form action="simpan_user.php" method="post">
			<div class="form-group has-success">
			<table class="table">
			<tr>
			<td>
				<b>Nama</b>
			<p></p>
			<input type="text" class="form-control" name="nama" placeholder="Nama User"></td>
			</tr>
			<tr>
			<td>
				<b>Username</b>
			<p></p>
			<input type="text" class="form-control" name="username" placeholder="Username untuk Login"></td>
			</tr>
			<tr>
			<td>
				<b>Password</b>
			<p></p>
			<input type="password" class="form-control" name="password" placeholder="Password untuk Login"></td>
			</tr>
			<tr>
			<td>
				<b>Level User</b>
			<p></p>
			<select name="level_user" class="btn btn-primary dropdown-toggle">
			<option value="">--Pilih--</option>
			<option value="petugas">Petugas</option>
			<option value="user">Karyawan</option>
			</select>
			</td>
			</tr>
			</table>
			<br>
			<table align="center">
			<tr>
			<td align="center"><button type="submit" class="btn btn-success"><span class ="glyphicon glyphicon-user"></span> Daftar</button>
				<button type="reset" class="btn btn-warning"><span class ="glyphicon glyphicon-refresh"></span> Reset</button></td>
			</tr>
			</table>
			</div>
			</form>
			</div>
			</div>
			</center>
 <br><br>

 <p></p>
 	<table id="datatable" class="display stripe">
 		<thead>
 			<tr>
 				<th>No</th>
 				<th>Nama</th>
 				<th>Username</th>
 				<th>Level User</th>
 				<th>Aksi</th>
 			</tr>
 		</thead>

 		<tbody>
 		<?php 
 			$no = 1; 
 			$query_mysql = mysql_query("SELECT * FROM user") or die(mysql_error() );
 			while ($data = mysql_fetch_array($query_mysql)){ 		
 		 ?>
 		  
 			<tr>
 				<td><?php echo $no++ ?></td>
 				<td> <?php echo $data['nama']; ?></td>
 				<td> <?php echo $data['username']; ?></td>
 				<td> <?php echo $data['level_user']; ?></td>
 				<td> 
 				<a href = "edit_user.php?kd=<?php echo $data['kd_user']; ?>" class="btn btn-warning"> Edit </a>
 				<a onclick="return confirm('Apakah Anda Yakin?')" href= "hapus_user.php?kd_user=<?php echo $data['kd_user']; ?>" class="btn btn-danger"> Hapus </a>
 				</td>

 				<?php } ?>
 			</tr>
 		</tbody>
 		
 	</table>

 	<?php
 		if(isset($_GET['pesan'])){
 			$pesan = $_GET['pesan'];
 			if($pesan == "userada") {
 				echo "<script language='javascript'>window.alert('Kode User sudah ada, silakan input kode baru!');</script>";
 			} else if ($pesan == "berhasil") {
	 			echo "<script language='javascript'>window.alert('Selamat Data tersimpan!');</script>";
	 		} else if ($pesan == "gagal") {
	 			echo "<script language='javascript'>window.alert('Data gagal tersimpan!');</script>";
	 		} else if ($pesan == "kosong") {
	 			echo "<script language='javascript'>window.alert('Data gagal tersimpan!');</script>";
	 		}

 			
	 	} else {} 

 	?>
 	
 </body>
 </html>