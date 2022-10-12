<?php
$host="localhost";
$user="id19679134_lucky";
$password="<7oQSM?ynpH#[nK]";
$db="id19679134_ce";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>