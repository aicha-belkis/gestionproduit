<!-- this for do relation BTW host and sreveur-->
<?PHP
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "ges_pro";
 $con = mysqli_connect($host,$user,$pass,$db);
   if (!$con) echo "probleme de connexion";
    ?>
    
    