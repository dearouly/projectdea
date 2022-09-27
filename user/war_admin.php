<!DOCTYPE html>
<html lang="en">
<?php include("../config.php"); ?>
<head>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-SIPPNOPAT</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_admin.php">
                <div class="sidebar-brand-icon rotate-n-15">     
                </div>
                <div class="sidebar-brand-text mx-3">E-SIPPNOPAT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index_admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pelayanan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>NOTARIS</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="legal_admin.php">LEGALISASI</a>
                        <a class="collapse-item" href="war_admin.php">WARMERKING</a>
                        <a class="collapse-item" href="uwto_admin.php">UWTO</a>
                        <a class="collapse-item" href="pendirian_admin.php">PENDIRIAN <br> BADAN USAHA</a>
                        <a class="collapse-item" href="perubahan_admin.php">PERUBAHAN <br> BADAN USAHA</a>
                    </div>
                </div>
            </li>

            <!-- Heading -->      

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>PPAT</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="jb_admin.php">JUAL BELI</a>
                        <a class="collapse-item" href="cek_admin.php">PENGECEKAN <br> SERTIFIKAT</a>
                        <a class="collapse-item" href="roya_admin.php">ROYA</a>
                        <a class="collapse-item" href="ht_admin.php">HAK TANGGUNGAN</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>KELOLA</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="staff.php">STAFF</a>
                        <a class="collapse-item" href="klien.php">KLIEN</a>
                        <a class="collapse-item" href="layanan.php">LAYANAN</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            
            <hr class="sidebar-divider my-0">

  
            
            <li class="nav-item">
                <a class="nav-link" href="profile_admin.php">
                <i class="fa fa-user"></i>
                    <span>Profile</span></a>
            </li>
        

          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                       <!-- Nav Item - User Information -->
       
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, <?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/icons8-test-account-16.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?php
 
      function bytesToSize($bytes, $precision = 2){  
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $gigabyte = $megabyte * 1024;
        $terabyte = $gigabyte * 1024;
       
        if (($bytes >= 0) && ($bytes < $kilobyte)) {
          return $bytes . ' B';
        } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
          return round($bytes / $kilobyte, $precision) . ' KB';
        } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
          return round($bytes / $megabyte, $precision) . ' MB';
        } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
          return round($bytes / $gigabyte, $precision) . ' GB';
        } elseif ($bytes >= $terabyte) {
          return round($bytes / $terabyte, $precision) . ' TB';
        } else {
          return $bytes . ' B';
        }
      }
    ?>
                <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Warmerking
                    
                        </h1>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabel-data" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>No</th>
<th >No. Berkas</th>
    <th>Nama Pemohon</th>
    <th>NIK</th>
    <th>JENIS DOKUMEN</th>
    <th>PENERBIT DOKUMEN</th>
    <th>DESKRIPSI</th>
    <th>TGL INPUT</th>
    <th>Status Berkas</th>
    <th>Oleh</th>
    <th>FILE</th>
    <th>AKSI</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                  


                                    <?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM warmerking";
$query = mysqli_query($conn, $sql);
$no = 1;
while ($row = mysqli_fetch_array($query)){
  echo '
  <tr>
  <td>'.$no.'</td>
            <td>WAR00'.$row['id_war'].'</td>
            <td>'.$row['nm_pemohon'].'</td>
            <td>'.$row['nik'].'</td>
            <td>'.$row['jenis_dok'].'</td>
            <td>'.$row['penerbit_dok'].'</td>
            <td>'.$row['deskripsi_dok'].'</td>
            <td>'.$row['tgl_upload'].'</td>
            <td><a href="#" class="btn btn-success btn-sm" 
  data-toggle="tooltip" data-placement="top" title="'.$row['tgl_ubah'].'">'.$row['status'].'</a></td>
  <td>'.$row['user'].' </td>

            <td><a href="uploads/'.$row['file_name'].'" class="btn btn-primary btn-sm"> <i class="fas fa-download"></i></a></td> 
            <td>
            <a href="edit_war.php?id_war='.$row['id_war'].'" class="btn"><i class="fas fa-pencil-alt"></i></a> 
            <a href="hapus_war.php?id_war='.$row['id_war'].'" class="btn" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fa fa-times" aria-hidden="true"></i></a> 
            </td>
    </tr>
  ';
  $no++;
}
?>


<?php }  ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Dea Rouly | 3311811027</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
</body>

</html>