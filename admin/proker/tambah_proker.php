
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	


$nama = isset($_POST['nama_kegiatan']) ? $_POST['nama_kegiatan'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$waktu = isset($_POST['waktu']) ? $_POST['waktu'] : '';
$tempat= isset($_POST['tempat']) ? $_POST['tempat'] : '';
$pemateri= isset($_POST['pemateri']) ? $_POST['pemateri'] : '';
$divisi= isset($_POST['divisi']) ? $_POST['divisi'] : '';
$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';



$query = "INSERT INTO proker (nama_kegiatan, tanggal, waktu,tempat,pemateri,divisi, keterangan) VALUES ('$nama', '$tanggal', '$waktu', '$tempat','$pemateri','$divisi','$keterangan')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../proker.php';</script>";
}
      
            