<?php
//la connexion avec la base de données

$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";



//Récupération de données

$nom=$_POST['code'];
$prenom=$_POST['etudiant'];


//Insertion de données

$sql= "insert into groupe (code,etudiant) values ('$nom', '$prenom')";
if(mysqli_query($con,$sql)){
header ("location:proj4.html");
}
else echo "Erreur d'insertion ";	


?>