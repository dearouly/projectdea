
<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_legal = $_GET['id_legal'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM legalisasi WHERE id_legal=$id_legal");
echo "<script>alert('DataBerhasil dihapus');window.location='legal_admin.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>