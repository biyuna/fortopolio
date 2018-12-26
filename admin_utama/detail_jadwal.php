<?php 


include 'header.php';

 ?>
 <?php 
 $id = $_GET['kd']; 

	$query_mysql = mysql_query("SELECT * FROM det_jadwal_perawatan WHERE id_jadwal='$id'") or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
  ?>
  <br><br><br>
 	<table border="1" style="width:600px; border color="black" align="center"><font face="verdana">

 		<tr>
			<td bgcolor="#6495ED" align="center" style="width:600px;"><font color="#ffffff"> Kode Ruangan </font></td>
			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['kd_ruangan'] ?> </td>
 		</tr> 
 		
 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"><font color="#ffffff"> No. Komputer </td>
 			<td bgcolor="#6495ED"  align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['no_komputer'] ?> </td>
 		</tr>

 		<tr>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"><font color="#ffffff"> Pemakai </td>
 			<td bgcolor="#6495ED" align="center" style="width:600px;"> <font color="#ffffff"> <?php echo $data['pemakai'] ?> </td>
 		</tr>
		</font>
 	</table>
 	<br><br><br><br>
 	<table align="right" style="margin-right:50px" >
 	<tr>
 	<td><a href="jadwal.php" class="btn btn-info">Kembali</a></td>
 	</tr>
 	</table>
 	<?php } ?>

