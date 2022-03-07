
<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("suppEtud.php");

$code=$_POST['code'];
$requet="delete from etudiant where CodeEtudiant = '$code'";
$ok=mysqli_query($idcon, $requet) ;
if ($ok==FALSE)
echo "Problème de suppression <br/>";
else
echo "Suppression effectuée avec succes <br/>";

?>