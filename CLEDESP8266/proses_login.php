<?php

$username = $_POST['username'];
$password = $_POST['password'];
$hpwd = hash('sha1',$password);
$hash = "3da5fc0bfdbf2b0e1ba2b171771be854749d9453";
if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=loginform.php'>";
}else if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=loginform.php'>";
}else if ($username == 'dwi' and $hpwd == $hash){
header("location:index.php");
}else{
header("location:salah.php");		
#echo "<meta http-equiv='refresh' content='1 url=loginform.php'>";
}
?>