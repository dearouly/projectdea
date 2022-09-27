

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_uwto = $_GET['id_uwto'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM uwto WHERE id_uwto=$id_uwto");
echo "<script>alert('DataBerhasil dihapus');window.location='uwto_staff.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>