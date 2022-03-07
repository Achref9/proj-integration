<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("nouveauEtudiant.php");

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'] ;
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];
$requet="insert into etudiant values
('$code', ' $nom', '$prenom', '$adresse', '$classe')";
$ok=mysqli_query($idcon,$requet);
if ($ok==FALSE)
echo "Problème d'inscription <br/>";
else
echo "Insertion efectuée avec succes <br/>";
//$dec = mysqli_close($idcon);
?>