<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$nama_data = isset($_POST['nama_data']) ? $_POST['nama_data'] : '';


$query = "INSERT INTO inventaris (nama_data) VALUES ('$nama_data')";
$result = mysqli_query($kon, $query);

// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../inventaris.php';</script>";
}
            





