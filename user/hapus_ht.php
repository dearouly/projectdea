

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_ht = $_GET['id_ht'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM hak_tanggungan WHERE id_ht=$id_ht");
echo "<script>alert('DataBerhasil dihapus');window.location='ht_admin.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>