

<?php
// include database connection file
include "../koneksi.php";
 
// Get id from URL to delete that user
$id_ubah = $_GET['id_ubah'];
 
// Delete user row from table based on given id
$data = mysqli_query($koneksi, "DELETE FROM perubahan WHERE id_ubah=$id_ubah");
echo "<script>alert('DataBerhasil dihapus');window.location='perubahan_admin.php'</script>";
// After delete redirect to Home, so that latest user list will be displayed.

?>