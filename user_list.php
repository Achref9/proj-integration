<style>
        ul li
{
    list-style-type: none;
}

        </style>
        
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<?php
$idcon=mysqli_connect("localhost" ,"root", "","biblio");

$requet="select id, name, username, gender, phone, user_type, email from login";
$res=mysqli_query($idcon, $requet);
?>



<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
	<a href="#"><strong><span class="fa fa-dashboard"></span> User List</strong></a>
	<hr>
    <ul class="pager">
  <li class="previous"><p>
        <a class="btn btn-primary btn-xs" href="mainMenu.php"><i class="fa fa-cloud-download"></i> <span>Previous Page</span></a>
      </p></li>
 
</ul>		
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<a href="addUser.php"><button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Add</button></a>
            </div>

		</div>
	</div>
    
    


    
	<table id="userList" class="table table-bordered table-striped">
		<thead>
            <tr><td colspan="8" style="background:#047CFC"><span style="color:white">USER DATA</tr>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Username</th>
				<th>Gender</th>
				<th>Mobile</th>
				<th>User type</th>
				<th>Email</th>
				<th>Action</th>					
				
			</tr>
            <?php
while ($ligne=mysqli_fetch_array($res))

{

?>
<tr>

<td><?php echo $ligne[0]; ?></td> 								
<td><?php echo $ligne[1]; ?></td>
<td><?php echo $ligne[2]; ?></td>
<td><?php echo $ligne[3]; ?></td>
<td><?php echo $ligne[4]; ?></td>
<td><?php echo $ligne[5]; ?></td>
<td><?php echo $ligne[6]; ?></td>

<form method="GET" action="deleteUser.php">
<td colspan="1"><button type="button" href="deleteUser.php?id<?= $ligne['id'];?>" name="delete" id="delete_id" class="btn btn-danger btn-xs">Delete</button>
</form>
<button type="button" name="edit" id="edituser" class="btn btn-primary btn-xs">Edit</button></td>

</tr>
<?php

}

mysqli_close($idcon);
?>
		</thead>
	</table>
</div>
<ul class="pager">
  <li class="previous"><p>
        <a class="btn btn-primary btn-xs" href="mainMenu.php"><i class="fa fa-cloud-download"></i> <span>Previous Page</span></a>
      </p></li>
 
</ul>

