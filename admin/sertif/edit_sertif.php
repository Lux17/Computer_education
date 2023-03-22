<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id_sertif']) ? $_POST['id_sertif'] : '';
  $nama= isset($_POST['nama']) ? $_POST['nama'] : '';
  $nama_kajian = isset($_POST['nama_kajian']) ? $_POST['nama_kajian'] : '';
  $no_sertif = isset($_POST['no_sertif']) ? $_POST['no_sertif'] : '';


  $query  = "UPDATE sertif SET nama_kajian = '$nama_kajian',nama= '$nama', no_sertif = '$no_sertif'";
  $query .= "WHERE id_sertif = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../sertif.php';</script>";
  }
       

 