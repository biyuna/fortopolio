<?php 


include 'header.php';

 ?>
 <?php 
 $kode = $_GET['kd']; 

	$query_mysql = mysql_query("SELECT * FROM user WHERE kd_user='$kode'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
  ?>
 <form action="update_user.php" method="post">
		<table class="table">
			<tr>
				<td>kode user
				<input type="text"  readonly class="form-control" name="kd_user" value="<?php echo $kode?>"></td>
			</tr>

			<tr>
				<td>Nama
				<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>			

			<tr>
				<td>Username
				<input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>"></td>
			</tr>
			
			<tr>
				<td>Level User
				<input type="text" class="form-control" readonly name="level_user" value="<?php echo $data['level_user'] ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><a href = "user.php" class="btn btn-info">Kembali </a></td>	
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