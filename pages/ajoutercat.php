<?php
 //require_once("../inculdes/navbar.php");//inculdes navb
 require_once("../inculdes/conx_db.php"); //inculdes conx.php
 
?>
   
 
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name ="viewport" content="width_device-widht,
  initial-scale=1.0">
  <link rel="stylesheet" herf="../css/style.css">
  <link rel ="stylesheet" href =" ../css/bootstrap.min.css">

    <title> Ajouter Un produit</title >
</head>
<body>
 
  
  <!-- panel01--> 
  
      <div class="col-sm-6 col-sm-offest-3">
      <div class="panel panel-success">
  <div class="panel-heading"> Ajouter Un Produit</div>
  <!--form01-->
  <div class="panel-body">

<form class="form-block" action="inserecat.php"method="post">
  <div class="form-group">
      <label for="categories"> categories</label>
     <input type="text" class="from-control" name="nomCat"id ="nomCat" placeholder="Entrer Categorie" required>
 </div>
 
  <div class="form-group">
     <label for="marque">Marque </label>
     <input type="text" class="form-control" id="marque" name="marque"
     placeholder="Entrer Marque"  required>
  </div>
    
   <!--btn rech-->
  <button type="submit" class="btn btn-success" >
    <span class="glyphicon glyphicon-ok"></span> 
     Inserer
  </button>
     <button type="reset" class="btn btn-warning">Ecrase</button>
</form>
</div>
</div>
      </div>
  

   
</body>
</html>