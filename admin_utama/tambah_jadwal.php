<?php 


include 'header.php';

 ?>

 <form action="simpan_jadwal.php" method="post">
		<table class="table">
			<tr>
				<td>Tanggal Perawatan
				<input type="text" class="form-control" name="tgl_perawatan" id="tgl_perawatan" placeholder="yyyy-mm-dd" autocomplete="off"></td>
			</tr>

			<tr>
				<td>Hari Perawatan
				<p></p>
				<select name="hari_perawatan" class="btn btn-primary dropdown-toggle">
				<option value="">Pilih</option>
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				</select>
				</td>

			</tr>

			<tr>
				<td>Kode Petugas
				<p></p>
				<select name="kd_petugas" class="btn btn-primary dropdown-toggle">
				<option value="">Pilih</option>
				<option value="P001">P001</option>
				<option value="P002">P002</option>
				<option value="P003">P003</option>
				<option value="P004">P004</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<td>Status Perawatan
				<input type="text" class="form-control" name="status_perawatan"></td>
			</tr>
			
			<tr>
				<td>Kode Ruangan
				<input type="text" class="form-control" name="kd_ruangan"></td>
			</tr>
			
			<tr>
				<td>No. Komputer
				<input type="text" class="form-control" name="no_komputer"></td>
			</tr>
			
			<tr>
				<td>Pemakai
				<input type="text" class="form-control" name="pemakai"></td>
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