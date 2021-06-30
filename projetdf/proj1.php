<?php
//la connexion avec la base de données

$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";

   //Récupération de données
$x=$_POST['nombre'];
$no=$_POST['nom'];
$pr=$_POST['prenom'];
$da=$_POST['date'];
$li=$_POST['lieu'];
$na=$_POST['nation'];
$se=$_POST['sexe'];
$nn=$_POST['nni'];
$niv=$_POST['niveau'];
$fil=$_POST['fil'];
$gr=$_POST['G'];


//Insertion de données

$sql= "insert into etudiant (numero,nom,prenom,date,lieu,nation,sexe,nni,niveau,filiere,gr) values ('$x','$no', '$pr','$da','$li','$na','$se','$nn','$niv','$fil','$gr')";
if(mysqli_query($con,$sql)){
header ("location:proj01.php");
}
else echo "Erreur d'insertion ";	


?>