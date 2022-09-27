
<?php
include 'config.php';
if(isset($_POST['save']))	 
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
$insert = $conn->query("INSERT INTO komentar(nama, email, komentar) VALUES('$nama','$email','$komentar')");
if($insert){
    echo "<script>alert('Komentar Berhasil ditambahkan');window.location='index.php'</script>";
}else{
    "<script>alert('Komentar Gagal ditambahkan, COBA LAGI');window.location='index.php'</script>";
}
?>