<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$nama_proker = isset($_POST['nama_proker']) ? $_POST['nama_proker'] : '';

$stat= isset($_POST['stat']) ? $_POST['stat'] : '';


$query = "INSERT INTO proker (nama_proker,stat) VALUES ('$nama_proker', '$stat')";
$result = mysqli_query($kon, $query);

$jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../proker.php';</script>";
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




