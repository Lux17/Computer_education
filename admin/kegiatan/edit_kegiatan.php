<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $nama_kegiatan = isset($_POST['nama_kegiatan']) ? $_POST['nama_kegiatan'] : '';
  $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
  $waktu = isset($_POST['waktu']) ? $_POST['waktu'] : '';
  $tempat= isset($_POST['tempat']) ? $_POST['tempat'] : '';
  $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';


  $query  = "UPDATE kegiatan SET nama_kegiatan = '$nama_kegiatan',tanggal= '$tanggal',waktu= '$waktu',tempat= '$tempat', keterangan = '$keterangan'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../kegiatan.php';</script>";
  }
       

 