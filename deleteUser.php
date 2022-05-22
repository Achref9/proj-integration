<?php
include("user_list.php");
$id = $_GET['delete'];

$sqlreq="DELETE FROM login WHERE id='$id'";

if (isset($_GET['delete'])) {
	
	if(mysqli_query($idcon,$sqlreq)){
	header('location: user_list.php');
}  else{
	echo "something went wrong";
}
}
?>