<?php
  include('../koneksi.php'); 
  session_start(); 
  if(isset($_COOKIE['ceadmin'])&&$_COOKIE['ceadmin']=="asjbmbnsugaldsks22"){
    echo "";
    }else{
        session_unset();
        session_destroy(); 
        header("Location:../index.php");
    }         
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computer Education - User</title>

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
            <li class="nav-item">
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
                        <a class="collapse-item" href="qr.php">Qr Code Generate</a>
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
                <a class="nav-link" href="no_surat.php">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Surat</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="kas.php">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Kas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="kegiatan.php">
                    <i class="fas fa-fw fa-check-circle"></i>
                    <span>Kegiatan</span></a>
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
            
            <li class="nav-item">
                <a class="nav-link" href="https://drive.google.com/drive/folders/1SiEy_hrVyoYsMraEVayBvLEH5q7Xq8uH?usp=share_link">
                    <i class="fas fa-fw fa-upload"></i>
                    <span>File</span></a>
            </li>
       
            <li class="nav-item">
                <a class="nav-link" href="blog.php">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Blog</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sertif.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sertifikat</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Kelola
            </div>


            <li class="nav-item active">
                <a class="nav-link" href="users.php">
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

                        

                        
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

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
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kelola Akun</h1>
                    <p class="mb-4">Kelola Akun.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Data Tabel Akun</h6>
                        </div>
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <center><h3>Data Akun</h3>
                                           
                                                                                <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Tambah Users
                        </button>
                        </center>
                            <br>
                                                    <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Users</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div>
                                                <form method="POST" action="users/tambah_users.php" enctype="multipart/form-data" >
                                                            <section class="base align-items-center ">

                                                                <div class="row mb-3">
                                                                <label for="username" class="col-sm-3 col-form-label">Username</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="username" autofocus="" required="" />
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="row mb-3">
                                                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                                                <div class="col-sm-8">
                                                                <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelpInline" data-toggle="password"  />
                                                                <div class= "input-group-append">
                                                                <span class="input-group-text" onclick="password_show_hide();">
                                                                    <i class="mb-2 fas fa-eye" id="show_eye"></i>
                                                                    <i class="mb-2 fas fa-eye-slash d-none" id="hide_eye"></i>
                                                                </span>
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label class="col-sm-3"> Rolename</label>
                                                                <div class="input-group col-sm-8">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="rolename" required="" >
                                                                    <option selected value="">Pilih</option> 
                                                                    <option value="admin">Admin</option>
                                                                    <option  value="sekertaris">Sekertaris</option>
                                                                    <option  value="bendahara">Bendahara</option>
                                                                    <option  value="publikasi">Publikasi</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                </div>
                                                                </div>
                                                                </div>


                                    
                                            
                                                            </section>
                                                            
                                                </div>
                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" name ="simpan" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                                                        <br/>

                                                        <table class="table table-hover">

                                                        <thead>
                                                            <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Username</th>
                                                            <th scope="col">Password</th>
                                                            <th scope="col">Rolename</th>
                                                            <th scope="col"></th>
                                                    
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                                                        $query = "SELECT * FROM admin ORDER BY id_user ASC";
                                                        $result = mysqli_query($kon, $query);
                                                        //mengecek apakah ada error ketika menjalankan query
                                                        if(!$result){
                                                            die ("Query Error: ".mysqli_errno($kon).
                                                            " - ".mysqli_error($kon));
                                                        }

                                                        //buat perulangan untuk element tabel dari data mahasiswa
                                                        $no = 1; //variabel untuk membuat nomor urut
                                                        // hasil query akan dpasswordmpan dalam variabel $data dalam bentuk array
                                                        // kemudian dicetak dengan perulangan while
                                                        while($row = mysqli_fetch_assoc($result))
                                                        {
                                                        ?>
                                                        <tr>
                                                            <td  scope="row"><?php echo $no; ?></td>
                                                            <td  scope="row"><?php echo $row['username']; ?></td>
                                                            <td  scope="row"><?php echo $row['password']; ?></td>
                                                            <td  scope="row"><?php echo $row['rolename']; ?></td>
                                                        
                                                            <td  scope="row">
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $row['id_user'];?>">
                                                                Edit
                                                                </button>
                                    
                                            <div class="modal fade" id="exampleModal<?php echo $row['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit users</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form method="POST" action="users/edit_users.php" enctype="multipart/form-data" >
                                                
                                                            <section class="base align-items-center ">
                                                            <div>
                                                                
                                                                <input type="hidden" value="<?php echo $row['id_user']; ?>" name="iduser" required="" />
                                                                </div>
                                                                <div>
                                                                <div class="row mb-3">
                                                                <label for="username" class="col-sm-3 col-form-label">username</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username" autofocus="" required="" />
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label for="password" class="col-sm-3 col-form-label">password</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="password" required="" />
                                                                </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                <label class="col-sm-3"> Rolename</label>
                                                                <div class="input-group col-sm-8">
                                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="rolename" required="" >
                                                                    <option selected value="<?php echo $row['rolename']; ?>"><?php echo $row['rolename']; ?></option> 
                                                                    <option value="admin">admin</option>
                                                                    <option  value="sekertaris">sekertaris</option>
                                                                    <option  value="bendahara">bendahara</option>
                                                                    </select>
                                                                    <div class="input-group-append">
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <!-- <div class="row mb-3">
                                                                <label for="rolename" class="col-sm-3 col-form-label">rolename</label>
                                                                <div class="col-sm-8">
                                                                <input type="text" class="form-control"  value="<?php echo $row['rolename']; ?>"  name="rolename" required="" />
                                                                </div>
                                                                </div> -->

                                                                </div>

                                                            </section>
                                                            
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                                </div>
                                            </div>
                                            </div>
                            <a href="users/hapus_users.php?id=<?php echo $row['id_user']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                        
                    <?php
                        $no++; //untuk nomor urut terus bertambah 1
                    }
                    ?>
                    </tbody>
                    </table>
                        </div>

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
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" jika anda ingin mengakhiri sesi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
    }
    </script>
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

</body>

</html>