

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_war = $_GET['id_war'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM warmerking WHERE id_war=$id_war");
echo "<script>alert('DataBerhasil dihapus');window.location='war_admin.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>