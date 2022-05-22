<?php 
include("login.php");
$data = mysqli_connect('localhost', 'root', "", 'biblio');
if($data===false)
{
   die("connection error");
}
if($_SERVER["REQUEST_METHOD"]="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select username, user_type from login where username='" .$username."' AND password='".$password."'";
    $result = mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["user_type"]=="user")
{
    header ("location:mainMenuUser.php");
}
elseif($row["user_type"]=="admin")
header ("location:mainMenu.php");
}
else
{
   echo "username or password incorrect";
}


?>




