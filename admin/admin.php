<?php
session_start();

if($_SESSION['status']!="login"){
  header("location:../index.php?pesan=belum_login");
}
else if($_SESSION['role']!="Administrator"){
  header("location:../user/index.php?msg=invalid");
}
?>
