

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_diri = $_GET['id_diri'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM pendirian WHERE id_diri=$id_diri");
echo "<script>alert('DataBerhasil dihapus');window.location='pendirian_admin.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>