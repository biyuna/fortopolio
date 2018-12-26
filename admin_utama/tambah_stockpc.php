<?php 


include 'header.php';

 ?>

 <form action="simpan_stockpc.php" method="post">
		<table class="table">
			<tr>
				<td>Nama Hardware
				<input type="text" class="form-control" name="nama_hardware"></td>
			</tr>

			<tr>
				<td>Merek Hardware
				<input type="text" class="form-control" name="merek_hardware"></td>
			</tr>

			<tr>
				<td>Status
				<p></p>
				<input type="radio" name="status" value="1">Aktif / Bagus &nbsp&nbsp&nbsp
				<input type="radio" name="status" value="0">Tidak Aktif / Rusak
				</td>
			</tr>

			<tr>
				<td>Jumlah
				<input type="text" class="form-control" name="jumlah"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>
		
 </body>
 </html>