<?php

require_once("../inculdes/navbar.php");//inculdes navbar.php
require_once("../inculdes/conx_db.php"); //inculdes conx.php
?>
<?php
 require_once("../inculdes/navbar.php");//inculdes navbar.php
 require_once("../inculdes/conx_db.php"); //inculdes conx.php
 
  $nomCat = isset($_GET ['nomCat']) ? $_GET ['nomCat'] : "all";
  $marque = isset($_GET ['marque']) ? $_GET ['marque'] : "";
  $size =isset($_GET ['size']) ? $_GET ['size'] : 6;
  $page=isset($_GET ['page']) ? $_GET ['size'] : 1;
  $offest= ($page - 1) * $size; 
 
  if ($nomCat =="all"){
     $query = " SELECT * FROM categories WHERE marque LIKE '%$marque%'";
     $query2 = " SELECT * FROM categories WHERE marque LIKE '%$marque%' LIMIT   $offest,$size" ;
    }  else {
      $query = "SELECT * FROM categories WHERE nomCat='$nomCat'  AND marque LIKE '%$marque%'";
      $query2 = " SELECT * FROM categories WHERE marque LIKE '%$marque%' LIMIT  $offest,$size" ;
      
  }
  $result= mysqli_query($con,$query);
  $numberResult = mysqli_num_rows($result);
  
  $numberPages= ceil( $numberResult/$size);

  $result2= mysqli_query($con,$query2);
  $numberResult2 = mysqli_num_rows($result2);
  
  
?>
   
 
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name ="viewport" content="width_device-widht,
  initial-scale=1.0">
  <link rel="stylesheet" herf="../css/style.css">
  <link rel ="stylesheet" href =" ../css/bootstrap.min.css">

    <title> Gestion produit</title >
</head>
<body>
 
  
  <!-- panel01--> 
  <div class="container">
  <div class="panel panel-success">
  <div class="panel-heading">Rechercher Un Produit</div>
  <!--form01-->
  <div class="panel-body">

<form class="form-inline" action="categories.php"method="get">
  <div class="form-group">
      <label for="categories"> categories</label>
     <select class="form-control"  name ="nomCat"id="nomCat" onchange="this.from.submit()">
      <?php
      $query3 ="SELECT nomCat FROM categories ";
      $result3 =mysqli_query($con,$query3);
         while($row = mysqli_fetch_array($result3)){
           echo "<option value ='" . $row['nomCat'] ."'>" . $row['nomCat'] . "</option>";
         }

      ?>


      <!--<option value="all" > toutes categories</option>
    <option >Alimentation</option>
    <option > Electronique</option>
    <option > Hygien</option>
    <option >Vetements</option>
    <option > Fourntinure</option>-->
    </select>
 </div>
 
  <div class="form-group">
     <label for="marque">Marque </label>
     <input type="text" class="form-control" id="marque" name="marque"
     placeholder="chercher Marque" value="<?PHP
      echo "$marque";?>">
  </div>
     <!--size01-->
   <div class="form-group">
      <label for="size"> Size</label>
    <select class="form-control"  name ="size"id="size" onchange="this.form.submit()">
    <option value="4"<?php if($size==4) echo
    "slected";?>> 4</option>
    <option value="6"<?php if($size==6) echo
    "slected";?> >6</option>
    <option value="8"<?php if($size==8) echo
    "slected";?>>8</option>
    <option value="10<?php if($size==10) echo
    "slected";?>">10 </option>
   
    </select>
 </div>
           <!--size00-->
   <!--btn rech-->
  <button type="submit" class="btn btn-success" >
    <span class="glyphicon glyphicon-search"></span> 
     chercher
  </button>
            <!--btn ajo-->
   <a class="btn btn-success" href="ajoutercat.php"> <span class="glyphicon glyphicon-plus "></span> Ajouter categories</a>
     
</form>
</div>
</div>
</div>
             <!--form00-->
 
<!--panel02-->
<div class="container">
  <div class="panel panel-warning">
  <div class="panel-heading">Liste des Produits (<?PHP echo
   $numberResult2;  ?>produits)</div>
  <div class="panel-body"> 
    <table class="table table-bordered">
        <thead >
            <tr class="bg-warning">
            <th >ID categories</th>
            <th>Désignation</th>
            <th>Marque</th>
            <th>Opérations</th>
            </tr>
        </thead>

        <tbody>
                <?php
        
                while($row = mysqli_fetch_assoc($result2)){
                  echo "<tr>
                <td class='bg-warning'>" . $row['idCat']  . "</td>
                <td>" . $row['nomCat'] . " </td>
                <td>" . $row['marque'] . "</td>
                <td><a href='#' class='btn btn-warning' ><span class='glyphicon glyphicon-pencil'></span> Modifier</a> 
                <a href='#' class='btn btn-danger'><span class='glyphicon glyphicon-trash '></span>Supprimer </a></td>
                </tr>";
                }
                ?>
           <!--
             <tr>  
           <td class="bg-warning">2</td>
           <td>Electronique</td>
           <td>Samsung</td>
           <td ><a href="#" class="btn btn-warning" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a> 
           <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash "></span>Supprimer </a></td>
            </tr>

             <tr>
           <td class="bg-warning">3</td>
           <td>Hygien</td>
           <td>Dalaa </td>
           <td><a href="#" class="btn btn-warning" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a> 
           <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash "></span>Supprimer </a></td>
            </tr>
    
             <tr>
           <td class="bg-warning">4</td>
           <td>Vetements</td>
           <td>Adidas</td>
           <td><a href="#" class="btn btn-warning" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a> 
           <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash "></span>Supprimer </a></td>
            </tr>
   
        -->
        </tbody>

    </table> 
      
     
      <ul class="pagination ">
      <?php
         for ($i=1; $i <= $numberPages;$i++) {
             echo "  <li class='";
            
             if($page == $i)
             echo"active";
             echo"'><a href='categories.php? nomCat=$nomCat&marque=$marque&size=$size&page=$page&cpage$i'> page $i</a></li>";
         
         } 
         ?>
      <!--pages--
    
      <li ><a href="#">page 2</a></li>
      <li><a href="#">page 3</a></li>
      <li><a href="#">page 4</a></li>
      <li><a href="#">page 5</a></li>
</ul>
              -->

</div>
</div>
</div>
 
   
</body>
</html>

::1
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
::<?php
$nomCat = isset($_POST['nomCat'] ) ? $_POST['nomCat'] : "";
$marque = isset($_POST['marque'] ) ? $_POST['marque'] : "";
?>
