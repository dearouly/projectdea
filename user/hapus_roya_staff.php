

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_roya = $_GET['id_roya'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM roya WHERE id_roya=$id_roya");
echo "<script>alert('DataBerhasil dihapus');window.location='roya_staff.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>