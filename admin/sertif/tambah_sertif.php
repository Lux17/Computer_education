
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();


if (isset($_POST['simpan'])) {
    $no_sertif= $_POST['no_sertif'];
   
    $query = mysqli_query($kon, "SELECT no_sertif FROM sertif WHERE no_sertif = '$no_sertif'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../sertif.php';</script>";
    } else {

        $nama= isset($_POST['nama']) ? $_POST['nama'] : '';
        $nama_kajian = isset($_POST['nama_kajian']) ? $_POST['nama_kajian'] : '';
        $no_sertif = isset($_POST['no_sertif']) ? $_POST['no_sertif'] : '';
        
        $query = "INSERT INTO sertif (nama, no_sertif, nama_kajian) VALUES ('$nama', '$no_sertif', '$nama_kajian')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../sertif.php';</script>";
        }
              
                    
              
                    
        
    }
};
