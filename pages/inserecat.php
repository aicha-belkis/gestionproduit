<?php
include_once("../inculdes/conx_db.php");
$nomCat = isset($_POST['nomCat'] ) ? strtoupper($_POST['nomCat'] ): "";
$marque = isset($_POST['marque'] ) ? strtoupper($_POST['marque'] ): "";
 $insertProductQ = "INSERT INTO categories(nomCat,marque) values
 (null,'$nomCat','$marque')";
 mysqli_query($con,$insertProductQ);
 header("location:categories.php");
?>
