<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
  $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
  $keterangan  = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
  $jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
  $jumlah_kas = isset($_POST['jumlah_kas']) ? $_POST['jumlah_kas'] : '';

  $angka= str_replace(".", "", $jumlah_kas);
 
  $query  = "UPDATE kas SET bulan = '$bulan',tahun = '$tahun',keterangan= '$keterangan',jenis = '$jenis', jumlah_kas = '$angka'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../kas.php';</script>";
  }
              

 