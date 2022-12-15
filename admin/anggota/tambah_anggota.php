<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
// cek nim
if (isset($_POST['simpan'])) {
    $no_anggota = $_POST['no_anggota'];
   
    $query = mysqli_query($kon, "SELECT no_anggota FROM anggota WHERE no_anggota = '$no_anggota'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../anggota.php';</script>";
    } else {
        $nama = isset($_POST['nama_anggota']) ? $_POST['nama_anggota'] : '';
        $nomer = isset($_POST['no_anggota']) ? $_POST['no_anggota'] : '';
        $lahir = isset($_POST['lahir']) ? $_POST['lahir'] : '';
        $nomer_hp = isset($_POST['nomer_hp']) ? $_POST['nomer_hp'] : '';
        $prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
        $divisi = isset($_POST['divisi']) ? $_POST['divisi'] : '';
        $sub_divisi = isset($_POST['sub_divisi']) ? $_POST['sub_divisi'] : '';
        
        
        $query = "INSERT INTO anggota (nama, no_anggota, lahir, nomer_hp, prodi,alamat,jabatan,divisi,sub_divisi) VALUES ('$nama', '$nomer', '$lahir', '$nomer_hp', '$prodi','$alamat','$jabatan', '$divisi', '$sub_divisi')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";
        }
              
                    
        
    }
};






