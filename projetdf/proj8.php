<?php
//la connexion avec la base de données

$var=mysqli_connect("localhost","root","","projet");
if(!$var){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";



//Récupération de données

$x=$_POST['nom'];
$y=$_POST['sp'];



//Insertion de données

$sql= "insert into composer (niveau,module) values ('$x','$y')";
if(mysqli_query($var,$sql)){
header ("location:proj8.html");
}
else echo "Erreur d'insertion ";	


?>