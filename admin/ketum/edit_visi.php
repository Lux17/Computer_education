<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $visi = isset($_POST['visi']) ? $_POST['visi'] : '';
  $misi = isset($_POST['misi']) ? $_POST['misi'] : '';

 
 
  $query  = "UPDATE ketum SET visi = '$visi', misi = '$misi'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../visi.php';</script>";
  }
              

 