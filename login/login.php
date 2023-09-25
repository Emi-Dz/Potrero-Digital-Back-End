<?php
$ckuser = "admin";
$ckpassword = 1234;

$user = $_POST ["user"];
$password = $_POST ["pass"];

if ($ckuser == $user && $ckpassword == $password){
  header ("location:https://www.catalasjuin.com/homerswebpage/");
} else {
  echo "<script>alert('Incorrect user or password');window.location='login.html'</script>";
}
 ?>
