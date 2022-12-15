<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
      
if (isset($_POST['simpan'])) {
  
   
    $query = mysqli_query($kon, "SELECT * FROM ketum"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../visi.php';</script>";
    } else {
        $visi = isset($_POST['visi']) ? $_POST['visi'] : '';
        $misi = isset($_POST['misi']) ? $_POST['misi'] : '';
        
        
        $query = "INSERT INTO ketum (visi, misi) VALUES ('$visi', '$misi')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../visi.php';</script>";
        }
                
                    
        
    }
};





