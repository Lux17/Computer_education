<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_inventaris = isset($_POST['id_inventaris']) ? $_POST['id_inventaris'] : '';
  $nama_data= isset($_POST['nama_data']) ? $_POST['nama_data'] : '';
 
  $query  = "UPDATE inventaris SET nama_data= '$nama_data'";
  $query .= "WHERE id_inventaris = '$id_inventaris'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../inventaris.php';</script>";
  }
              

 