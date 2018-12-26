<?php 


include 'header.php';

 ?>
 <?php 
 $kode = $_GET['kd']; 
  
	$query_mysql = mysql_query("SELECT * FROM petugas WHERE kd_petugas='$kode'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
  ?>
  <br><br>
 	<table border="1" style="width:600px; border color="black" align="center"><font face="verdana">
 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> Kode </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['kd_petugas'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> Nama </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['nama_petugas'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff" > Jenis Kelamin </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['jk'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> Tempat Lahir </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['tmp_lahir'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> Tanggal Lahir </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['tgl_lahir'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> Alamat </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['alamat'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> No Telepon </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['no_tlpn'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> Email </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['email'] ?> </td>
 		</tr>
 	</table>

 	<br><br>
 	<table align="right" style="margin-right:50px" >
 	<tr>
 	<td><a href="petugas.php" class="btn btn-info">Kembali</a></td>
 	</tr>
 	<?php } ?>
 </body>
 </html>