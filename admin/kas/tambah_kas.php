<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
$jumlah_kas = isset($_POST['jumlah_kas']) ? $_POST['jumlah_kas'] : '';


$query = "INSERT INTO kas (bulan, jumlah_kas) VALUES ('$bulan', '$jumlah_kas')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../kas.php';</script>";
}
            

// if ($jumlah>0) {
// 	$row = mysqli_fetch_assoc($hasil);
// 	$_SESSION['id'] = $data['id'];
// 	$_SESSION['nama'] = $username;
// 	$_SESSION['no_anggota'] = $nomer;
//     $_SESSION['lahir'] = $lahir;
// 	$_SESSION['nomer_hp'] = $nomer;
//     $_SESSION['prodi'] = $prodi;
// 	$_SESSION['alamat'] = $alamat;
//     $_SESSION['jabatan'] = $jabatan;
//     echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";

// else{
//     echo "<script>alert('Data Gagal ditambah.');</script>";
// }




