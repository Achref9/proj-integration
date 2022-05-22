<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supprimer professeur</title>
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
<ul class="pager">
  <li class="previous"><p>
        <a class="btn btn-info btn-lg" href="indexProf.html"><i class="fa fa-cloud-download"></i> <span>Previous Page</span></a>
      </p></li>
 
</ul>
    <div class="registration-form">
    <form method="POST", action="suppProf_action.php">
            <div class="form-icon">
                <span><i class="icon icon-trash"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="code" placeholder="Code">
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn btn-block create-account" value="Delete Professor">
            </div>
        </form>
        <ul class="pager">
</ul>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
