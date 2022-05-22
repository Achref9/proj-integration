<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("nouveauProf.php");

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'] ;
$adresse=$_POST['adresse'];

$requet="insert into professeur values
('$code', ' $nom', '$prenom', '$adresse')";
$ok=mysqli_query($idcon,$requet);
if ($ok==FALSE)
echo "Problème d'ajout <br/>";
else
echo "Insertion efectuée avec succes <br/>";
//$dec = mysqli_close($idcon);
?>