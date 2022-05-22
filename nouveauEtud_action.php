<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("nouveauEtudiant.php");

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'] ;
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$requet="insert into etudiant values
('$code', ' $nom', '$prenom', '$adresse', '$classe','$email','$phone')";
$ok=mysqli_query($idcon,$requet);
if ($ok==FALSE)
echo "<script>alert('Problème d'inscription');</script>";
else
echo "<script>alert('Insertion efectuée avec succes');</script>";
//$dec = mysqli_close($idcon);
?>