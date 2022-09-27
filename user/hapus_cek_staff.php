

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_cek = $_GET['id_cek'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM pengecekan WHERE id_cek=$id_cek");
echo "<script>alert('DataBerhasil dihapus');window.location='cek_staff.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>