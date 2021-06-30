<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";


//Récupération de données

$x=$_POST['fil'];
$y=$_POST['dep'];
$z=$_POST['coor'];

//Insertion de données

$sql= "insert into filiere (filiere,departement,coordinateur) values ('$x','$y','$z')";
if(mysqli_query($con,$sql)){
header ("location:proj01.php");
}
else echo "Erreur d'insertion ";	


?>