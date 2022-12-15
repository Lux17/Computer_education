<?php
include ('../koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computer Education- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/favicon1.png" rel="icon">
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
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/favicon1.png" alt="" width="43" height="45" class="d-inline-block align-text-top">
                </div>
                <div class="sidebar-brand-text mx-3">Computer Education </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Alat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Alat:</h6>
                        <a class="collapse-item" href="surat.php">Auto Create Surat</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="visi.php">
                    <i class="fas fa-fw fa-bullseye"></i>
                    <span>Visi-Misi</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="kas.php">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Kas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="proker.php">
                    <i class="fas fa-fw fa-clipboard-check"></i>
                    <span>Proker</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="anggota.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Anggota</span></a>
            </li>
            
            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Kelola
            </div>


            <li class="nav-item">
                <a class="nav-link" href="Users.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Users</span></a>
            </li>

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


                    
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">                               
                                 <?php
                                echo $_SESSION['username'];
                                ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total Uang kas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                           
                                            
                                            <?php

                                            $data_kas = mysqli_query($kon,"SELECT SUM(jumlah_kas) AS total_kas FROM kas");
                                            $total =0;

                                            while($row = mysqli_fetch_assoc($data_kas))
                                            {
                                                $total += $row['total_kas'];
                                            }
                                            ?>

                                            
                                            <p>Rp. <?php echo $total; ?></b></p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Program Kerja
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                                    $data_proker = mysqli_query($kon,"SELECT * FROM proker");

                                                    // menghitung data barang
                                                    $jmlh_proker= mysqli_num_rows($data_proker);
                                                    ?>
                                                    
                                                    <p><?php echo  $jmlh_proker;  ?></b></p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah Pengurus</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            
                                            <?php

                                            $data_pengurus = mysqli_query($kon,"SELECT * FROM anggota WHERE jabatan LIKE 'Pengurus'");
 
                                            // menghitung data barang
                                            $jmlh_pengurus = mysqli_num_rows($data_pengurus);
                                            ?>
                                             
                                            <p><?php echo  $jmlh_pengurus;  ?></b></p>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

               
                        

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Anggota</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">


                                            <?php

                                            $data_anggota = mysqli_query($kon,"SELECT * FROM anggota WHERE jabatan LIKE 'Anggota'");
 
                                            // menghitung data barang
                                            $jmlh_anggota = mysqli_num_rows($data_anggota);
                                            ?>
                                             
                                            <p><?php echo $jmlh_anggota; ?></b></p>


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 

                    <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Divisi Organisasi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            
                                            <?php

                                            $data_pengurus = mysqli_query($kon,"SELECT * FROM anggota WHERE divisi LIKE 'organisasi'");
 
                                            // menghitung data barang
                                            $jmlh_pengurus = mysqli_num_rows($data_pengurus);
                                            ?>
                                             
                                            <p><?php echo  $jmlh_pengurus;  ?></b></p>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-network-wired fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Divisi Komputer</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            
                                            <?php

                                            $data_pengurus = mysqli_query($kon,"SELECT * FROM anggota WHERE divisi LIKE 'komputer'");
 
                                            // menghitung data barang
                                            $jmlh_pengurus = mysqli_num_rows($data_pengurus);
                                            ?>
                                             
                                            <p><?php echo  $jmlh_pengurus;  ?></b></p>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-desktop fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary  text-uppercase mb-1">
                                                Jumlah User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            
                                            <?php

                                            $data_pengurus = mysqli_query($kon,"SELECT * FROM admin ");
 
                                            // menghitung data barang
                                            $jmlh_pengurus = mysqli_num_rows($data_pengurus);
                                            ?>
                                             
                                            <p><?php echo  $jmlh_pengurus;  ?></b></p>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Pembina</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                            
                                             
                                            <p>Khairul Anwarudin, M.Kom</p>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <div class="row">
                         <!-- Card Body -->
                        <div class="card-body mr-3">
                        <h5>Visi & Misi</h5>
                        <hr>
                        <?php
                           
                           // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
                           $query = "SELECT * FROM ketum ORDER BY id ASC";
                           $result = mysqli_query($kon, $query);
                           //mengecek apakah ada error ketika menjalankan query
                           if(!$result){
                               die ("Query Error: ".mysqli_errno($kon).
                               " - ".mysqli_error($kon));
                           }

                           //buat perulangan untuk element tabel dari data mahasiswa
                           $no = 1; //variabel untuk membuat nomor urut
                           // hasil query akan disimpan dalam variabel $data dalam bentuk array
                           // kemudian dicetak dengan perulangan while
                           while($row = mysqli_fetch_assoc($result))
                           {
                           ?>

                        <!-- Pie Chart -->
                       
                        <div class="col-md-6 col-md-6 align-items-center">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card shadow mb-4">
                                <div class="card-header py-3">
                            
                                </div>
                                <div class="card-body">
                                <h6 class="m-0 font-weight-bold text-primary">Visi</h6>
                                    <p><?php echo $row['visi']; ?></p>
                                    <h6 class="m-0 font-weight-bold text-primary">Misi</h6>
                                    <p><?php echo $row['misi']; ?></p>
                                </div>
                            </div>
                                <!-- Card Body -->
            
                            </div>
                           </div>
                    </div>
                           </div>

                    <?php
                           };
                    ?>
                    <!-- Content Row -->

                    <div class="row">

                        
                                <!-- Card Body -->
                                <div class="card-body">
                          
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
  
                                <!-- Card Body -->
            
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                  

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
                        <span>Copyright &copy; Computer Education 2022</span>
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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