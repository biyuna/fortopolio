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
			<li class="active"><a href="petugas.php"><span class="glyphicon glyphicon-briefcase"></span> Data Petugas </a></li>
			<li><a href="stockpc.php"><span class="glyphicon glyphicon-briefcase"></span> Data Stock </a></li>	
			<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Data User </a></li>
			<li><a href="pass.php"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
			<li><a onClick="return confirm('Anda yakin ingin logout!')" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">

 <h3>Data Petugas</h3>
 <p></p>
 <center>
 	<a href = "tambah_petugas.php" class="btn btn-primary">Tambah Petugas </a>
 </center>
 <p></p>
 	<table id="datatable" class="display stripe">
 		<thead>
 			<tr>
 				<th>No</th>
 				<th>Kode</th>
 				<th>Nama</th>
 				<th>Jenis Kelamin</th>
 				<th>Staff</th>
 				<th>Aksi</th>
 			</tr>
 		</thead>

 		<tbody>
 		<?php 
 			$no = 1; 
 			$query_mysql = mysql_query("SELECT * FROM petugas") or die(mysql_error() );
 			while ($data = mysql_fetch_array($query_mysql)){ 		
 		 ?>
 		  
 			<tr>
 				<td><?php echo $no++ ?></td>
 				<td> <?php echo $data['kd_petugas']; ?></td>
 				<td> <?php echo $data['nama_petugas']; ?></td>
 				<td> <?php echo $data['jk']; ?></td>
 				<td> <?php echo $data['staff']; ?></td>
 				<td> 
 				<a href = "detail_petugas.php?kd=<?php echo $data['kd_petugas']; ?>" class="btn btn-info">Detail </a>
 				<a href = "edit_petugas.php?kd=<?php echo $data['kd_petugas']; ?>" class="btn btn-warning"> Edit </a>
 				<a onclick="return confirm('Apakah Anda Yakin?')" href= "hapus_petugas.php?kd=<?php echo $data['kd_petugas']; ?>" class="btn btn-danger"> Hapus </a>
 				</td>

 				<?php } ?>
 			</tr>
 		</tbody>
 		
 	</table>

 	<?php
 		if(isset($_GET['pesan'])){
 			$pesan = $_GET['pesan'];
 			if($pesan == "kodesama") {
 				echo "<script language='javascript'>window.alert('Kode Petugas sudah ada, silakan input kode baru!');</script>";
 			} else if ($pesan == "berhasilsimpan") {
	 			echo "<script language='javascript'>window.alert('Selamat Data tersimpan!');</script>";
	 		} else if ($pesan == "gagalsimpan") {
	 			echo "<script language='javascript'>window.alert('Data gagal tersimpan!');</script>";
	 		}
 			
	 	} else {} 

 	?>
 	
 </body>
 </html>