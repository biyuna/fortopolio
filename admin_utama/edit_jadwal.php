<?php 


include 'header.php';

 ?>

 <h3>Edit Jadwal</h3>
 <br>
 <?php
 $kode = $_GET['kd']; 
	$query_mysql = mysql_query("SELECT * FROM jadwal_perawatan WHERE id_jadwal='$kode'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
		$id_jadwal = $data['id_jadwal'];
		$tgl_perawatan = $data['tgl_perawatan'];
		$hari_perawatan = $data['hari_perawatan'];
		$kd_petugas = $data['kd_petugas'];
		$status_perawatan = $data['status_perawatan'];
	}
  ?>
 <form action="update_jadwal.php" method="post">
		<table class="table">
			<tr>
				<td>Id Jadwal
				<input type="text"  readonly class="form-control" name="id_jadwal" value="<?php echo $id_jadwal?>"></td>
			</tr>

			<tr>
				<td>Tanggal Perawatan
				<input type="text" class="form-control" name="tgl_perawatan" value="<?php echo $tgl_perawatan ?>" id="tgl_perawatan" placeholder="yyyy-mm-dd" ></td>
			</tr>

			<tr>
				<td>Hari Perawatan
				<p></p>
				<?php if ($hari_perawatan == "Senin") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				</select>

				<?php elseif ($hari_perawatan == "Selasa") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				<option value="Senin">Senin</option>
				</select>

				<?php elseif ($hari_perawatan == "Rabu") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				</select>

				<?php elseif ($hari_perawatan == "Kamis") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Jumat">Jumat</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				</select>		

				<?php elseif ($hari_perawatan == "Jumat") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				</select>	

				<?php else  : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="">Pilih</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				</select>

				<?php endif; ?>			

				</td>

			</tr>

			<tr>
				<td>Kode Petugas
				<p></p>
				<?php if ($kd_petugas == "P001") : ?>
				<select name="kd_petugas" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $kd_petugas ?>"><?php echo $kd_petugas ?></option>
				<option value="P002">P002</option>
				<option value="P003">P003</option>
				<option value="P004">P004</option>
				</select>

				<?php elseif ($kd_petugas == "P002") : ?>
				<select name="kd_petugas" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $kd_petugas ?>"><?php echo $kd_petugas ?></option>
				<option value="P003">P003</option>
				<option value="P004">P004</option>
				<option value="P001">P001</option>
				</select>

				<?php elseif ($kd_petugas == "P003") : ?>
				<select name="kd_petugas" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $kd_petugas ?>"><?php echo $kd_petugas ?></option>
				<option value="P004">P004</option>
				<option value="P001">P001</option>
				<option value="P002">P002</option>
				</select>

				<?php elseif ($kd_petugas == "P004") : ?>
				<select name="kd_petugas" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $kd_petugas ?>"><?php echo $kd_petugas ?></option>
				<option value="P001">P001</option>
				<option value="P002">P002</option>
				<option value="P003">P003</option>
				</select>

				<?php else  : ?>
				<select name="kd_petugas" class="btn btn-primary dropdown-toggle">
				<option value="">Pilih</option>
				<option value="P001">P001</option>
				<option value="P002">P002</option>
				<option value="P003">P003</option>
				<option value="P004">P004</option>
				</select>
				
				<?php endif; ?>	

				</td>
			</tr>
			
			<tr>
				<td>Status Perawatan
				<input type="text" class="form-control" name="status_perawatan" value="<?php echo $status_perawatan ?>"></td>
			</tr>
			
			 <?php 
				$kd_ruangan = "";
				$no_komputer = "";
				$pemakai = "";
				$keterangan = "";

				$query_mysql = mysql_query("SELECT * FROM det_jadwal_perawatan WHERE id_jadwal='$kode'") or die(mysql_error());
				while ($data2 = mysql_fetch_array($query_mysql)) {
					$kd_ruangan = $data2['kd_ruangan'];
					$no_komputer = $data2['no_komputer'];
					$pemakai = $data2['pemakai'];
					$keterangan = $data2['keterangan'];
				}
			  ?>

			<tr>
				<td>Kode Ruangan
				<input type="text" class="form-control" name="kd_ruangan" value="<?php echo $kd_ruangan ?>"></td>
			</tr>
			
			<tr>
				<td>No. Komputer
				<input type="text" class="form-control" name="no_komputer" value="<?php echo $no_komputer ?>"></td>
			</tr>
			
			<tr>
				<td>Pemakai
				<input type="text" class="form-control" name="pemakai" value="<?php echo $pemakai ?>"></td>
			</tr>
			
			
			<tr>
				<td></td>
				<td><a href = "jadwal.php" class="btn btn-info">Kembali </a></td>	
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>
		

		<script type="text/javascript">
			window.onload = function () {
				new JsDatePick({
					useMode: 2,
					target: "tgl_perawatan",
					dateFormat: "%Y-%m-%d",
					yearsRange: [1940, 2040]
				});
			};
		</script>

		
 </body>
 </html>