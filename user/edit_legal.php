<!DOCTYPE html>

<html lang="en">
<?php include("../config.php"); ?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

</style>

    <title>E-SIPPNOPAT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

                  
                    <h1 class="h3 mb-0 text-gray-800">EDIT STATUS LEGALISASI</h1>

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
                <div class="container-fluid">


                    <!-- Content Row -->

                 
                    <!-- content row start -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                        <?php
	include '../koneksi.php';
	$id_legal = $_GET['id_legal'];
	$data = mysqli_query($koneksi,"SELECT * from legalisasi where id_legal='$id_legal'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form method="post">    
          
        <div class="card border-primary">
                <div class="card-body">
                <div class="form-group">
                    <label class="col-md-12 mb-0">Status</label>
                        <div class="col-md-12">
                            <input type="text" name="status" value="<?php echo $d['status']; ?>"
                            class="form-control ps-0 form-control-line" >  
                        </div>
                </div>  
        <div class="col-md-2">
            <input type="submit" class="btn btn-primary" name="edit" value="SIMPAN">
        </div>

        <?php
        if($_POST['edit']){
            $id_legal = $_POST['id_legal'];
            $status = $_POST['status'];
            $tgl    = date("Y-m-d");
            $username       = $_SESSION['username'];


              $insert = $conn->query("UPDATE legalisasi set status='$status', tgl_ubah='$tgl', user='$username'  where id_legal='$id_legal'");
              if($insert){
                echo "<script>alert('Data Sukses Diupdate');window.location='legal_admin.php'</script>";
              }else{
                echo "<script>alert('Data Gagal Diupdate');window.location='edit_legal.php'</script>";
              }
           
            }
         
        
        ?>

                </div>
        </div>

        <div class="form-group">
                        <div class="col-md-12">
                        <input type="hidden" name="id_legal" value="<?php echo $d['id_legal']; ?>">
                        </div>
            </div> 


            <div class="form-group">
                    <label class="col-md-12 mb-0">Ussername</label>
                        <div class="col-md-12">
                            <input type="text" name="username" value="<?php echo $d['username']; ?>"
                            class="form-control ps-0 form-control-line" readonly value="" >    
                        </div>
            </div>


            <div class="form-group">
                    <label class="col-md-12 mb-0">Nama Pemohon</label>
                        <div class="col-md-12">
                            <input type="text" name="nm_pemohon" value="<?php echo $d['nm_pemohon']; ?>"
                            class="form-control ps-0 form-control-line" readonly value="" >    
                        </div>
            </div>

            <div class="form-group">
                    <label class="col-md-12 mb-0">NIK</label>
                        <div class="col-md-12">
                            <input type="text" name="nik" value="<?php echo $d['nik']; ?>"
                            class="form-control ps-0 form-control-line" readonly value="" >    
                        </div>
            </div>

            <div class="form-group">
                    <label class="col-md-12 mb-0">JENIS DOKUMEN</label>
                        <div class="col-md-12">
                            <input type="text" name="jenis_dok" value="<?php echo $d['jenis_dok']; ?>"
                            class="form-control ps-0 form-control-line" readonly value="" >    
                        </div>
            </div>

            <div class="form-group">
                    <label class="col-md-12 mb-0">PENERBIT DOKUMEN</label>
                        <div class="col-md-12">
                            <input type="text" name="penerbit_dok" value="<?php echo $d['penerbit_dok']; ?>"
                            class="form-control ps-0 form-control-line" readonly value="" >    
                        </div>
            </div>

            <div class="form-group">
                    <label class="col-md-12 mb-0">TGL INPUT</label>
                        <div class="col-md-12">
                            <input type="text" name="tgl_upload" value="<?php echo $d['tgl_upload']; ?>"
                            class="form-control ps-0 form-control-line" readonly value="" >    
                        </div>
            </div>

        
            
		</form>
		<?php 
	}
	?>
</div>
    </div>

                     


                    <!-- Content Row -->
                    

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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    
</body>

</html>