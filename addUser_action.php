<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');

include ("addUser.php");


$nom=$_POST['nom'];
$username=$_POST['username'] ;
$password=$_POST['passwd'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$userType=$_POST['userType'];



$requet="insert into login values(null ,'$username','$password','$userType','$mobile','$gender','$nom','$email')";
$ok=mysqli_query($idcon,$requet);



if ($ok==FALSE)
echo "Problème d'ajout <br/>";
else
echo "Insertion efectuée avec succes <br/>";



//$dec = mysqli_close($idcon);
?>


