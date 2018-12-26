<?php 


include 'header.php';

 ?>
 <?php 
 $kode = $_GET['kd']; 

	$query_mysql = mysql_query("SELECT * FROM petugas WHERE kd_petugas='$kode'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
  ?>
 <form action="update_petugas.php" method="post">
		<table class="table">
			<tr>
				<td>Kode
				<input type="text" class="form-control" readonly name="kd_petugas" value="<?php echo $data['kd_petugas'] ?>"></td>
			</tr>

			<tr>
				<td>Nama
				<input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin
				<p></p>
				<?php if ($data['jk'] == "L") : ?>
				<input name="jk" type="radio" value="L"checked>Laki-laki</input>
				<input type="radio" name="jk" value="P">Perempuan
				</select>

				<?php elseif ($data['jk'] == "P") : ?>
				<input name="jk" type="radio" value="P" checked>Perempuan</input>
				<input type="radio" name="jk" value="L">Laki-laki
				</select>

				<?php else  : ?>
				<input type="radio" name="jk" value="L">Laki-laki
				<input type="radio" name="jk" value="P">Perempuan
				
				<?php endif; ?>	
				</td>
			</tr>
			
			<tr>
				<td>Tempat Lahir
				<input type="text" class="form-control" name="tmp_lahir" value="<?php echo $data['tmp_lahir'] ?>"></td>
			</tr>
			
			<tr>
				<td>Tanggal Lahir
				<input type="text" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']?>" id="tgl_lahir" placeholder="yyyy-mm-dd" autocomplete="off" >
				</td>
			</tr>
			
			<tr>
				<td>Staff
				<p></p>
				<?php if ($data['staff'] == "IT HARDWARE") : ?>
				<select name="staff" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $data['staff'] ?>"><?php echo $data['staff'] ?></option>
				<option value="IT SOFTWARE">IT SOFTWARE</option>
				<option value="IT HELPDESK">IT HELPDESK</option>
				</select>

				<?php elseif ($data['staff'] == "IT SOFTWARE") : ?>
				<select name="staff" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $data['staff'] ?>"><?php echo $data['staff'] ?></option>
				<option value="IT HELPDESK">IT HELPDESK</option>
				<option value="IT HARDWARE">IT HARDWARE</option>				
				</select>


				<?php elseif ($data['staff'] == "IT HELPDESK") : ?>
				<select name="staff" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $data['staff'] ?>"><?php echo $data['staff'] ?></option>
				<option value="IT HARDWARE">IT HARDWARE</option>	
				<option value="IT SOFTWARE">IT SOFTWARE</option>			
				</select>

				<?php else  : ?>
				<select name="staff" class="btn btn-primary dropdown-toggle">
				<option value="">Pilih</option>
				<option value="IT HARDWARE">IT HARDWARE</option>
				<option value="IT SOFTWARE">IT SOFTWARE</option>
				<option value="IT HELPDESK">IT HELPDESK</option>
				</select>

				<?php endif; ?>	
				</td>
			</tr>
			
			<tr>
				<td>Alamat
				<input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
			</tr>
			
			<tr>
				<td>No Telepon
				<input type="text" class="form-control" name="no_tlpn" value="<?php echo $data['no_tlpn'] ?>"></td>
			</tr>
			
			<tr>
				<td>Email
				<input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><a href = "petugas.php" class="btn btn-info">Kembali </a></td>	
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>
		<?php } ?>

		<script type="text/javascript">
			window.onload = function () {
				new JsDatePick({
					useMode: 2,
					target: "tgl_lahir",
					dateFormat: "%Y-%m-%d",
					yearsRange: [1940, 2040]
				});
			};
		</script>

		
 </body>
 </html>