<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";


//Récupération de données

$x=$_POST['depr'];
$y=$_POST['cre'];


//Insertion de données

$sql= "insert into departement (nom,date) values ('$x','$y')";
if(mysqli_query($con,$sql)){
header ("location:proj6.html");
}
else echo "Erreur d'insertion ";	


?>