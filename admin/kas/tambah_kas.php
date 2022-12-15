<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
$jumlah_kas = isset($_POST['jumlah_kas']) ? $_POST['jumlah_kas'] : '';


$angka= str_replace(".", "", $jumlah_kas);

$query = "INSERT INTO kas (bulan, jumlah_kas) VALUES ('$bulan', '$angka')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../kas.php';</script>";
}
            





