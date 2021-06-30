<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";

//Récupération de données

$n=$_POST['niveau'];
$f=$_POST['filiere'];


//Insertion de données

$sql= "insert into niveau (niveau,filiere) values ('$n', '$f')";
if(mysqli_query($con,$sql)){
header ("location:proj3.html");
}
else echo "Erreur d'insertion ";	






?>