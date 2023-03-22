<?php
include('koneksi.php');

// if($result){
  
// }else{
 
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Computer Education</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


   <!-- Template Main CSS File -->
 <link href="assets/css/styles.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
      <img src="assets/img/logo_ce.png" alt="" width="150" height="80" class="d-inline-block align-text-top">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item">
            <a class="nav-link" style="color: #348A0C;" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #348A0C;" href="index.php">Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #348A0C;" href="index.php">Divisi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #348A0C;"  href="index.php">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: #348A0C;" href="index.php">Pengurus</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" style="color: #348A0C;" href="#blog">Artikel</a>
          </li>
  
          <li><a class="getstarted scrollto" href="masuk.php"type="submit">Masuk</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <style>
  .card {
 cursor: pointer;

 background: rgb(255, 255, 255);
 border-radius: 5px;
 border: 1px solid rgba(0, 0, 255, .2);
 transition: all .2s;
 box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
}

.card:hover {
 box-shadow: -12px 12px 2px -1px rgba(0, 0, 255, .2);
}




  </style>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="sertifikat.php">Sertifikat</a></li>
        </ol>
        <h2>Sertifikat</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" >

        <div class="row">

          <div class="col-lg-12 entries">
            
          <?php
            $id_sert= preg_replace("/[^a-zA-Z0-9]/","",$_GET['no_sertif']);
            $id_sertiff= strtolower($id_sert);

            $query = "SELECT * FROM sertif WHERE no_sertif='$id_sertiff'";
            $result = mysqli_query($kon, $query);
            //mengecek apakah ada error ketika menjalankan query


            $no = 1; //variabel untuk membuat nomor urut
            // hasil query akan disimpan dalam variabel $data dalam bentuk array
            // kemudian dicetak dengan perulangan while




          if(!$result){

            die ("Query Error: ".mysqli_errno($kon).
            " - ".mysqli_error($kon));

            }

           while($row = mysqli_fetch_assoc($result))
           {


                           ?>
        <div class="row">

          <div class="col-lg-12 entries">

          <center>
          <div class="card mb-5" style="width:450px;">
            <div class="card-header">
              <img src="assets/img/Checked_Turquoise.svg" alt="checklist">
                Sertifikat Terverifikasi
            </div>
            <div class="card-body">
              <b><p class="card-text">ID Sertifikat</p></b>
                <h5><?php echo $row['no_sertif'] ?></h5>
                <b><p class="card-text">Nama</p></b>
                <h5><?php echo $row['nama'] ?></h5>
                <b><p class="card-text">Jenis Sertifikat</p></b>
                <h5><?php echo $row['nama_kajian'] ?></h5>
            </div>
            </div>
        <?php
            };

            if($result == null){
              echo "<script>alert('Data Tidak Ada.');window.location='sertifikat.php';</script>";
            }else{

            }
            ?>
          
          </center>
        
        <div class="modal" tabindex="-1" id="sertt">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ID Sertifikat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <center>
                <img src="assets\img\id_sertif.png" alt="">
                <br>
                <br>
                <p>ID Sertifikat terletak di kiri bawah sertifikat.</p>
                </center>

            </div>
            </div>
        </div>
        </div>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- <img src="assets/img/logo.png" alt=""> -->

          <span>Computer Education</span>
        </a>
        <p>Unit Kegiatan Mahasiswa Computer Education adalah sarana pengembangan Mahasiswa di bidang IPTEK.</p>
        <div class="social-links mt-3">

          <a href="http://instagram.com/computereducation_" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UCdtVMq63VKfnjJGDr5O1Kkw/featured" class="youtube"><i class="bi bi-youtube"></i></a>

        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Sejarah</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Divisi</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Pengurus</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Galeri</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Artikel</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Divisi</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Organisasi</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="index.php">Komputer</a></li>

        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Kontak Kami </h4>
          <strong>Email:</strong> <br>
          Computer.education1306@gmail.com<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Computer Education</span></strong>. All Rights Reserved
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>