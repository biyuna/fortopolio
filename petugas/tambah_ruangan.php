<?php 


include 'header.php';

 ?>

 <form action="simpan_ruangan.php" method="post">
		<table class="table">
			<tr>
				<td>Kode
				<input type="text" class="form-control" name="kd_ruangan"></td>
			</tr>

			<tr>
				<td>Nama
				<input type="text" class="form-control" name="nama_ruangan"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
		</form>
		
 </body>
 </html>