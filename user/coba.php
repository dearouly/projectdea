<?php 
require_once '../config.php';
?>

<form method="post">
<input type="text" name="ht" placeholder="cari ...">
<input type="submit" name="submit" value="cari">
<form>
<br/>
<br/>

<table border=1>
<thead>  
                               <tr>  
                               <th>No</th>
    <th>No. Berkas</th>
    <th>Username</th>
    <th>Nama Pemohon</th>
    <th>NIK</th>
    <th>JENIS SERTIF</th>
    <th>NO SERTIFIKAT</th>
    <th>ALAMAT SERTIFIKAT</th>
    <th>TIPE DIBITUR</th>  
    <th>NAMA DIBITUR</th>  
    <th>NPWP DIBITUR</th>  
    <th>ALAMAT DIBITUR</th>  

    <th>TIPE KREDITUR</th>  
    <th>NAMA KREDITUR</th>  
    <th>NPWP KREDITUR</th>  
    <th>BERKEDUDUKAN</th>  
    <th>Tgl Input</th>
    <th>Status Berkas</th>
    <th>FILE</th>
    <th>AKSI</th>
    
                               </tr>  
                          </thead>  
<?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM hak_tanggungan";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)){
  echo '
  <tr>
    <td>'.$no.'</td>
    <td>HT00'.$row['id_ht'].'</td>
    <td>'.$row['username'].'</td>
    <td>'.$row['nm_pemohon'].'</td>
    <td>'.$row['nik'].'</td>
    <td>'.$row['jenis_sertif'].'</td>
    <td>'.$row['no_sertif'].'</td>
    <td>'.$row['alamat_sertif'].'</td>

    <td>'.$row['tipe_debt'].'</td>
    <td>'.$row['nama_debt'].'</td>
    <td>'.$row['npwp_debt'].'</td>
    <td>'.$row['alamat_debt'].'</td>

    <td>'.$row['tipe_kredit'].'</td>
    <td>'.$row['nama_kredit'].'</td>
    <td>'.$row['npwp_kredit'].'</td>
    
    <td>'.$row['berkedudukan'].'</td>
    <td>'.$row['tgl_upload'].'</td>
    <td><a href="#" class="btn btn-success btn-sm">'.$row['status'].'</a></td>
    <td><a href="uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm"> <i class="fas fa-download"></i></a></td> 
    <td>
    <a href="edit_ht.php?id_ht='.$row['id_ht'].'" class="btn"><i class="fas fa-pencil-alt"></i></a> 
    <a href="hapus_ht.php?id_ht='.$row['id_ht'].'" class="btn"><i class="fa fa-times" aria-hidden="true"></i></a> 
    </td>
    </tr>
  ';
  $no++;
}
?>


<?php }  ?>

<?php if (ISSET($_POST['submit'])){
 $cari = $_POST['ht'];
 $query2 = "SELECT * FROM hak_tanggungan WHERE nik LIKE '%$cari%'";
 
 $sql = mysqli_query($conn, $query2);
 while ($r = mysqli_fetch_array($sql)){
  echo '
  <tr>
    <td>'.$no.'</td>
    <td>HT00'.$r['id_ht'].'</td>
    <td>'.$r['username'].'</td>
    <td>'.$r['nm_pemohon'].'</td>
    <td>'.$r['nik'].'</td>
    <td>'.$r['jenis_sertif'].'</td>
    <td>'.$r['no_sertif'].'</td>
    <td>'.$r['alamat_sertif'].'</td>

    <td>'.$r['tipe_debt'].'</td>
    <td>'.$r['nama_debt'].'</td>
    <td>'.$r['npwp_debt'].'</td>
    <td>'.$r['alamat_debt'].'</td>

    <td>'.$r['tipe_kredit'].'</td>
    <td>'.$r['nama_kredit'].'</td>
    <td>'.$r['npwp_kredit'].'</td>
    
    <td>'.$r['berkedudukan'].'</td>
    <td>'.$r['tgl_upload'].'</td>
    <td><a href="#" class="btn btn-success btn-sm">'.$r['status'].'</a></td>
    <td><a href="uploads/'.$r['file_name'].'" class="btn btn-primary btn-sm"> <i class="fas fa-download"></i></a></td> 
    <td>
    <a href="edit_ht.php?id_ht='.$r['id_ht'].'" class="btn"><i class="fas fa-pencil-alt"></i></a> 
    <a href="hapus_ht.php?id_ht='.$r['id_ht'].'" class="btn"><i class="fa fa-times" aria-hidden="true"></i></a> 
    </td>
    </tr>
  ';
  $no++;
}
  
  ?>
 
 <?php } ?>

</table>