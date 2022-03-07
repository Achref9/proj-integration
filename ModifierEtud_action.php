<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("modifierEtud.php");

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'] ;
$adresse=$_POST['adresse'];
$classe=$_POST['classe'];

$requet ="update etudiant set nom='$nom',Prenom='$prenom',
adresse='$adresse', classe='$classe' where CodeEtudiant='$code'";

$ok=mysqli_query($idcon,$requet);
if ($ok==FALSE)
echo "Problème de modification <br/>";
else
echo "Modification efectuée avec succes <br/>";
?>