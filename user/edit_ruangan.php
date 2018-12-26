<?php 


include 'header.php';

 ?>

 <?php 
 $kode = $_GET['kd']; 

	$query_mysql = mysql_query("SELECT * FROM ruangan WHERE kd_ruangan='$kode'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
  ?>
 <form action="update_ruangan.php" method="post">
		<table class="table">
			<tr>
				<td>Kode
				<input type="text" class="form-control" readonly name="kd_ruangan" value="<?php echo $data['kd_ruangan'] ?>"></td>
			</tr>

			<tr>
				<td>Nama
				<input type="text" class="form-control" name="nama_ruangan" value="<?php echo $data['nama_ruangan'] ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><a href = "ruangan.php" class="btn btn-info">Kembali </a></td>	
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>
		<?php } ?>
 </body>
 </html>