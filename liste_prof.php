<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Prof</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta charset="">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
    <form method="GET" action="">
    <div>
            
        <div class="input-group mb-3">
            
  <input type="text" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Code Professeur, nom, prenom" name="search" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" name="submitSearch">Rechercher</button>
  </div>
</div>
<Table class="table table-hover">
<thead class="thead-dark">
<tr>
<th> Code</th>
<th> Nom </th>
<th> Prénom</th>
<th> Adresse</th>

</tr>
</thead>
</table>
<?php 
   $idcon = mysqli_connect("localhost","root","","biblio");

    if(isset($_GET['search']))
         {
             $filtervalues = $_GET['search'];
              $requete = "SELECT * FROM professeur WHERE CONCAT(Nom,prenom,codeProf) LIKE '%$filtervalues%' ";
                         $ok = mysqli_query($idcon, $requete);

                   if(!$ok || mysqli_num_rows($ok) > 0)
                  {
                       foreach($ok as $ligne)
                          {
                       ?>
                       <table class="table table-hover">
                       

                          <tr>
                            <td><?= $ligne['codeProf']; ?></td>
                            <td><?= $ligne['nom']; ?></td>
                            <td><?= $ligne['prenom']; ?></td>
                             <td><?= $ligne['adresse']; ?></td>
                          </tr>
                          </table>
       <?php
                   }
                }
         else
                   {
                ?>
                   <tr>
                  <td colspan="4">Professeur(e) inexistant(e)</td>
                    </tr>
               <?php
                 }
            }
       ?>
     </div>   
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
