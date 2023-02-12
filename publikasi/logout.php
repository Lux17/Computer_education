<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['username']='';
$_SESSION['nama']='';
$_SESSION['password']='';
$_SESSION['rolename']='';

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['password']);
unset($_SESSION['rolename']);

session_unset();
session_destroy();
setcookie("ceadmin","", time() - 24 * 3600);
header('Location:../masuk.php');

?>