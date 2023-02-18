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

    <title>Computer Education - Program Kerja</title>

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


            <li class="nav-item active">
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
            <!-- Nav Item - Tables -->  
            <li class="nav-item">
                <a class="nav-link" href="blog.php">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Blog</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Kelola
            </div>


            <li class="nav-item">
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
                    <h1 class="h3 mb-2 text-gray-800">Program Kerja</h1>
                    <p class="mb-4">List Program Kerja Computer Education.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Data Tabel Program Kerja</h6>
                    </div>

                
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<!-- Button trigger modal -->


<div class="d-sm-flex align-items-center justify-content-between mb-4">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
Tambah 
</button>
                
                    </div>
                    <a href="export_proker.php" class="d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Download</a>



<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Proker</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="proker/tambah_proker.php" enctype="multipart/form-data" >
                        <section class="base align-items-center ">
                            <div class="row mb-3">
                            <label for="Nama" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_kegiatan" autofocus="" required=""  />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="TTL" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                            <input type="date"  class="form-control"  name="tanggal" required="" />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="waktu" required="" />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                            <div class="col-sm-8">
                            <textarea type="text" class="form-control" name="tempat" required="" > </textarea>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="tempat" class="col-sm-3 col-form-label">Pemateri</label>
                            <div class="col-sm-8">
                            <textarea type="text" class="form-control" name="pemateri" required="" > </textarea>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label class="col-sm-3">Divisi</label>
                            <div class="input-group col-sm-8">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="divisi" required="" >
                                <option selected value="">Pilih...</option> 
                                <option value="Divisi Komputer">Divisi Komputer</option>
                                <option  value="Divisi Organisasi">Divisi Organisasi</option>
                                </select>
                                <div class="input-group-append">
                            </div>
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label class="col-sm-3">Keterangan</label>
                            <div class="input-group col-sm-8">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="keterangan" required="" >
                                <option selected value="">Pilih...</option> 
                                <option value="Terlaksana">Terlaksana</option>
                                <option  value="Tidak Terlaksana">Tidak Terlaksana</option>
                                </select>
                                <div class="input-group-append">
                            </div>
                            </div>
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
        </div>


                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Tempat</th>
                                            <th>Pemateri</th>
                                            <th>Divisi</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Tempat</th>
                                            <th>Pemateri</th>
                                            <th>Divisi</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

                           // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
                        $query = "SELECT * FROM proker ORDER BY id ASC";
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
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_kegiatan']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['waktu']; ?></td>
                                        <td><?php echo $row['tempat'];?></td>
                                        <td><?php echo $row['pemateri'];?></td>
                                        <td><?php echo $row['divisi'];?></td>
                                        <td><?php echo $row['keterangan']; ?></td>

                                        

                                        <td>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?php echo $row['id'];?>">
        Edit
        </button>
        <div class="modal fade" id="exampleModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="proker/edit_proker.php" enctype="multipart/form-data" >
            
                        <section class="base align-items-center ">
                        <div>
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id" required="" />
                        </div>
                        <div class="row mb-3">
                        <label for="Nama" class="col-sm-3 col-form-label">Nama Kegiatan</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['nama_kegiatan']; ?>" name="nama_kegiatan" autofocus="" required="" />
                        </div>
                        </div>


                        <div class="row mb-3">
                        <label for="TTL" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                        <input type="date"  class="form-control"  value="<?php echo $row['tanggal']; ?>" name="tanggal" required="" />
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $row['waktu']; ?>" name="waktu" required="" />
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-8">
                        <textarea type="text" class="form-control" value="<?php echo $row['tempat']; ?>" name="tempat" required="" ><?php echo $row['tempat']; ?></textarea>
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="tempat" class="col-sm-3 col-form-label">Pemateri</label>
                        <div class="col-sm-8">
                        <textarea type="text" class="form-control" value="<?php echo $row['pemateri']; ?>" name="pemateri" required="" ><?php echo $row['pemateri']; ?></textarea>
                        </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-3">Divisi</label>
                            <div class="input-group col-sm-8">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="divisi" required="" >
                                <option selected value="<?php echo $row['divisi']; ?>"><?php echo $row['divisi']; ?></option> 
                                <option value="Divisi Komputer">Divisi Komputer</option>
                                <option  value="Divisi Organisasi">Divisi Organisasi</option>
                                </select>
                                <div class="input-group-append">
                            </div>
                            </div>
                            </div>


                        <div class="row mb-3">
                            <label class="col-sm-3">Keterangan</label>
                            <div class="input-group col-sm-8">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="keterangan" required="" >
                                <option selected value="<?php echo $row['keterangan']; ?>"><?php echo $row['keterangan']; ?></option> 
                                <option value="Terlaksana">Terlaksana</option>
                                <option  value="Tidak Terlaksana">Tidak Terlaksana</option>
                                </select>
                                <div class="input-group-append">
                            </div>
                            </div>
                            </div>

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit"  class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
        </div>
                                        |
                                            <a  href="proker/hapus_proker.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                        
                                    <?php
                                        $no++; //untuk nomor urut terus bertambah 1
                                    }
                                    ?>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>