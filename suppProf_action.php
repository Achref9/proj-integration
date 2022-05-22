
<?php
$idcon=mysqli_connect('localhost','root',"",'biblio');
include ("suppProf.php");

$code=$_POST['code'];
$requet="delete from Professeur where CodeProf = '$code'";
$ok=mysqli_query($idcon, $requet) ;
if ($ok==FALSE)
echo "Problème de suppression <br/>";
else
echo "Suppression effectuée avec succes <br/>";

?>