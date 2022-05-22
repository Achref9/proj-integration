
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ajouter utilisateur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        ul li
{
    list-style-type: none;

}

        </style>
</head>
<body>
    
<div class="registration-form">
<ul class="pager">
  <li class="previous"><p>
        <a class="btn btn-primary btn-xs" href="user_list.php"><i class="fa fa-cloud-download"></i> <span>Previous Page</span></a>
      </p></li>
 
</ul>
<form method="POST" action="addUser_action.php">
            <div class="form-icon">
                <span><i class="icon icon-pencil"></i></span>
            </div>  
            <div class="form-group">
                <input type="text" class="form-control item" name="nom" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="passwd" placeholder="Password">
            </div>

            <div>

            <select name="gender"  class="form-control item">
            </div>
            <option disabled selelected>Gender</option>
            <option value="Male">Male</option>
             <option value="Female">Female</option>
            </select>


            <div class="form-group">
                <input type="text" class="form-control item" name="mobile" placeholder="Mobile">
            </div>

            <div >

            <select name="userType" class="form-control item">
            <option disabled selelected>Type</option>
              <option value="admin">admin</option>
              <option value="user">user</option>
              </select>

            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block create-account" value="Add User">
            </div>
        </form>
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
<?php

?>
