

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");
echo "<script>alert('DataBerhasil dihapus');window.location='staff.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>