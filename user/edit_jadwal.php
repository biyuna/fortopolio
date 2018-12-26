<?php 


include 'header.php';

 ?>

 <h3>Reschedule Jadwal</h3>
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
				<option value="Sabtu">Sabtu</option>
				</select>

				<?php elseif ($hari_perawatan == "Selasa") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				<option value="Sabtu">Sabtu</option>
				<option value="Senin">Senin</option>
				</select>

				<?php elseif ($hari_perawatan == "Rabu") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				<option value="Sabtu">Sabtu</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				</select>

				<?php elseif ($hari_perawatan == "Kamis") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Jumat">Jumat</option>
				<option value="Sabtu">Sabtu</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				</select>		

				<?php elseif ($hari_perawatan == "Jumat") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Sabtu">Sabtu</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				</select>	

			<?php elseif ($hari_perawatan == "Sabtu") : ?>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="<?php echo $hari_perawatan ?>"><?php echo $hari_perawatan ?></option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
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