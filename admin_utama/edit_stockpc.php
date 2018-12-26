<?php 


include 'header.php';

 ?>

 <?php 
 $kode = $_GET['kd']; 

	$query_mysql = mysql_query("SELECT * FROM stock_pc WHERE id_hardware='$kode'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
  ?>
 <form action="update_stockpc.php" method="post">
		<table class="table">
			<tr>
				<td>ID
				<input type="text" class="form-control" readonly name="id_hardware" value="<?php echo $data['id_hardware'] ?>"></td>
			</tr>

			<tr>
				<td>Nama Hardware
				<input type="text" class="form-control" name="nama_hardware" value="<?php echo $data['nama_hardware'] ?>"></td>
			</tr>

			<tr>
				<td>Merek Hardware
				<input type="text" class="form-control" name="merek_hardware" value="<?php echo $data['merek_hardware'] ?>"></td>
			</tr>


			<tr>
				<td>Status
				<p></p>
				<?php if ($data['status'] == "1") : ?>
				<input name="status" type="radio" value="1"checked>Aktif / Bagus</input>
				<input type="radio" name="status" value="0">Tidak Aktif / Rusak
				</select>

				<?php elseif ($data['status'] == "0") : ?>
				<input name="status" type="radio" value="0" checked>Tidak Aktif / Rusak</input>
				<input type="radio" name="status" value="1">Aktif / Bagus
				</select>

				<?php else  : ?>
				<input type="radio" name="status" value="1">Aktif / Bagus
				<input type="radio" name="status" value="0">Tidak Aktif / Rusak
				
				<?php endif; ?>	
				</td>
			</tr>
			
			<tr>
				<td>Jumlah
				<input type="text" class="form-control" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><a href = "stockpc.php" class="btn btn-info">Kembali </a></td>	
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>
		<?php } ?>
		
 </body>
 </html>