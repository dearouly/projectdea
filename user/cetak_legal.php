<html>
<?php include("../config.php"); ?>
<head>
</head>
<body>
 
	<center>
 
<hr><width="100" height="75"></hr>
<center><font size="5" face="Courier New">Laporan Legalisasi</font></center>
<center><b><font size="4" face="Courier New">Pelayanan Kantor Notaris & PPAT 
<br>Maria Yosefina Neng, S.H.,MKn</font></b></center><br>
<hr><width="100" height="75"></hr>
 
	</center>
	

 
	<table border="1" style="width: 100%">
		<tr>
		<th>No.</th>
            <th>No. Berkas</th>
	 <th>Username</th>		
    <th>Nama Pemohon</th>
    <th>NIK</th>
    <th>Tgl Upload</th>
		</tr>
		<?php 
		$no = 1;
		$sql = $conn->query("SELECT * FROM legalisasi");
        while($row = $sql->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td>LGL00<?php echo $row['id_legal']; ?></td>
			 <td><?php echo $row['username']; ?></td>
			<td><?php echo $row['nm_pemohon']; ?></td>
			<td><?php echo $row['nik']; ?></td>
			<td><?php echo $row['tgl_upload']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<br>
	<br>	
<div>
	<div style="width:700px;float:right">
		Mengetahui
		<br/>Notaris & PPAT Kota Batam
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<p>Maria Yosefina Neng, S.H.,MKn</p>
	</div>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
