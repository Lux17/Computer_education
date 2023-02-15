<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	

if (isset($_POST['simpan'])) {
    $no_surat = $_POST['no_surat'];
   
    $query = mysqli_query($kon, "SELECT no_surat FROM surat WHERE no_surat = '$no_surat'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../no_surat.php';</script>";
    } else {
        $id_surat = isset($_POST['id_surat']) ? $_POST['id_surat'] : '';
        $no_surat = isset($_POST['no_surat']) ? $_POST['no_surat'] : '';
        $perihal = isset($_POST['perihal']) ? $_POST['perihal'] : '';
        $kepada  = isset($_POST['kepada']) ? $_POST['kepada'] : '';
        $jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
        $tujuan = isset($_POST['tujuan']) ? $_POST['tujuan'] : '';
        
        
        $query = "INSERT INTO surat (no_surat, perihal, kepada, tujuan, jenis) VALUES ('$no_surat', '$perihal','$kepada','$tujuan','$jenis')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../no_surat.php';</script>";
        }
                
                    
        
    }
};
