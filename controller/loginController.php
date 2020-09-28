<?php
include '../model/user.php';
include '../model/conexion.php';
$femail=$_POST ['femail'];
$fpasswd=$_POST ['fpasswd'];
//echo "email es {femail} y la contraseña es {$fpasswd}";
//creo el objeto user (la primera mayuscula pq es una clse)
$user=new User($femail, $fpasswd);
echo $user->getEmail();
echo "<br>";
echo $user->getPasswd();
$sql="SELECT * FROM tbl_user WHERE email=? and passwd=?";
$smt=$pdo->prepare($sql);
$smt->bindParam(1, $femail);
$smt->bindParam(2, $fpasswd);
$smt->execute();
$numUser=$smt->rowCount();
echo $numUser;
//hacer el location
//caso de exito
if($numUser==1){
header ("Location: ../view/home.php");
}else{
//fallo en la autenticacion
header ("Location: ../view/vista_login.html?error=1");
}