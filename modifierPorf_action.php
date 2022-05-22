<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("modifierProf.php");

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'] ;
$adresse=$_POST['adresse'];


$requet ="update professeur set nom='$nom',Prenom='$prenom',
adresse='$adresse' where codeProf='$code'";

$ok=mysqli_query($idcon,$requet);
if ($ok==FALSE)
echo "Problème de modification <br/>";
else
echo "Modification efectuée avec succes <br/>";
?>