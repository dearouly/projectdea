

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_jb = $_GET['id_jb'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM jual_beli WHERE id_jb=$id_jb");
echo "<script>alert('DataBerhasil dihapus');window.location='jb_admin.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>