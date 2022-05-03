<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $nama_proker = isset($_POST['nama_proker']) ? $_POST['nama_proker'] : '';
  $stat = isset($_POST['stat']) ? $_POST['stat'] : '';

 
 
  $query  = "UPDATE proker SET nama_proker = '$nama_proker', stat = '$stat'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil ditambah.');window.location='../proker.php';</script>";
  }
              

 