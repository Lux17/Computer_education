<?php
session_start();	
include "koneksi.php";

// pemeriksaan menggunakan fungsi isset()
$username = isset($_POST['username']) ? $_POST['username'] : '';
// pemeriksaan menggunakan fungsi empty()
$password = isset($_POST['password']) ? sha1($_POST['password']) : '';

$sql = "select * from admin where username='$username' and password='$password'";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


if($jumlah > 0){
 
	$data = mysqli_fetch_assoc($hasil);

 // cek jika user login sebagai admin
 if($data['rolename']=="admin"){

	$_SESSION['id_user'] = $data_user['id_user'];
	$_SESSION['username'] = $username;
	$_SESSION['rolename'] = $rolename;
	$_SESSION['status'] = "login";
	setcookie('ceadmin', 'asjbmbnsugaldsks22', time() + 24 * 3600);

	header("Location:admin/dashboard.php");



 // cek jika user login sebagai pegawai
 }else if($data['rolename']=="sekertaris"){
	$_SESSION['id_user'] = $data_user['id_user'];
	$_SESSION['username'] = $username;
	$_SESSION['rolename'] = $rolename;
	$_SESSION['status'] = "login";
	setcookie('ceadmin', 'asjbmbnsugaldsks22', time() + 24 * 3600);
	header("Location:admin/dashboard.php");

 // cek jika user login sebagai pengurus
 
}else if($data['rolename']=="publikasi"){
	$_SESSION['id_user'] = $data_user['id_user'];
	$_SESSION['username'] = $username;
	$_SESSION['rolename'] = $rolename;
	$_SESSION['status'] = "login";
	setcookie('ceadmin', 'asjkulnyyuehksd22', time() + 24 * 3600);
	header("Location:publikasi/blog.php");

 // cek jika user login sebagai pengurus
 }
 
 else if($data['rolename']=="bendahara"){
	$_SESSION['id_user'] = $data_user['id_user'];
	$_SESSION['username'] = $username;
	$_SESSION['rolename'] = $rolename;
	$_SESSION['status'] = "login";
	setcookie('ceadmin', 'asjbmbnsugaldsks22', time() + 24 * 3600);

	header("Location:admin/dashboard.php");

 }else{

	 // alihkan ke halaman login kembali

	 header("location:masuk.php?pesan=gagal");
	}	
}else{
	header("location:masuk.php?pesan=gagal");
}
?>
