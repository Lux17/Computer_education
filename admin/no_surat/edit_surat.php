<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_surat = isset($_POST['id_surat']) ? $_POST['id_surat'] : '';
  $no_surat = isset($_POST['no_surat']) ? $_POST['no_surat'] : '';
  $perihal = isset($_POST['perihal']) ? $_POST['perihal'] : '';
  $kepada  = isset($_POST['kepada']) ? $_POST['kepada'] : '';
  $jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
  $tujuan = isset($_POST['tujuan']) ? $_POST['tujuan'] : '';

 
  $query  = "UPDATE surat SET no_surat = '$no_surat',perihal = '$perihal',kepada= '$kepada',jenis = '$jenis', tujuan = '$tujuan'";
  $query .= "WHERE id_surat = '$id_surat'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../no_surat.php';</script>";
  }
              

 