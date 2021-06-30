<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="emp.css">



<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";
$val=$_GET['no'];
$valeur=$_GET['nom'];

//Affichage de données
echo "<h3>"."liste des Etudiants"."</h3>";
echo "<table border >";
echo "<tr>";
echo "<th>"."Numero"."</th>";
echo "<th>"."Nom"."</th>";
echo "<th>"."Prénom"."</th>";
echo "<th>"."Niveau"."</th>";
echo "<th>"."Filiére"."</th>";
echo "</tr>";

$sql= "select numero,nom,prenom,niveau,filiere from etudiant where filiere ='$valeur' and niveau='$val'";

$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo "<tr>";
	echo"<td>". $lign[0]."</td>"; 
	echo "<td>".$lign[1]."</td>";
    echo "<td>".$lign[2]."</td>"; 
    echo "<td>".$lign[3]."</td>"; 
	echo"<td>". $lign[4]."</td>"; 
	echo "</tr>";
}	
	
	
	
} else 
{
echo  "aucun enregistrements";
}
//echo mysqli_num_rows($resultat);
echo "</table>";

?>












