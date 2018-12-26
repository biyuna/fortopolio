<?php 


include 'header.php';

 ?>

 <form action="simpan_petugas.php" method="post">
		<table class="table">
			<tr>
				<td>Kode
				<input type="text" class="form-control" name="kd_petugas"></td>
			</tr>

			<tr>
				<td>Nama
				<input type="text" class="form-control" name="nama_petugas"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin
				<p></p>
				<input type="radio" name="jk" value="Laki-laki">Laki-laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			
			<tr>
				<td>Tempat Lahir
				<input type="text" class="form-control" name="tmp_lahir"></td>
			</tr>
			
			<tr>
				<td>Tanggal Lahir
				<input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="yyyy-mm-dd"></td>
				</td>
			</tr>
			
			<tr>
				<td>Staff
				<p></p>
				<select name="staff" class="btn btn-primary dropdown-toggle">
				<option value="">Pilih</option>
				<option value="IT HARDWARE">IT HARDWARE</option>
				<option value="IT SOFTWARE">IT SOFTWARE</option>
				<option value="IT HELPDESK">IT HELPDESK</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<td>Alamat
				<input type="text" class="form-control" name="alamat"></td>
			</tr>
			
			<tr>
				<td>No Telepon
				<input type="text" class="form-control" name="no_tlpn"></td>
			</tr>
			
			<tr>
				<td>Email
				<input type="text" class="form-control" name="email"></td>
			</tr>
			
			<tr>
			<td>
				<b>Password</b>
			<p></p>
			<input type="password" class="form-control" name="password" placeholder="Password untuk Login"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>

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