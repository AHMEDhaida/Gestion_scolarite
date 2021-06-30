<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="emp.css">
<style>
 .i{
	 background-color:#eee;
	 border:2px solid red;
	 width:40%;
	 margin:auto;
 }

</style>
</head>
<body onload="window.print()">


<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";

$valeur=$_GET['nom'];

//Affichage de données


$sql= "select numero,nom,prenom,niveau,filiere,nni from etudiant where numero ='$valeur'";

$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo"<div class='i'>";
	echo "<from  method='POST' action='impression.php'> ";
	echo "<h3>"."CARTE D'ETUDIANT"."</h3>";
echo "<table>";

echo "<tr>";
echo "<th>"."N°d'inscription"."</th>";
echo"<td>". $lign[0]."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>"."Nom"."</th>";
echo "<td>".$lign[1]."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>"."Prénom"."</th>";
echo "<td>".$lign[2]."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>"."Niveau"."</th>";
echo "<td>".$lign[3]."</td>";
echo "</tr>";

echo "<tr>";
echo "<th>"."Filiére"."</th>";
echo"<td>". $lign[4]."</td>"; 
echo "</tr>";

echo "<tr>";
echo "<th>"."NNI"."</th>";
echo"<td>". $lign[5]."</td>";
echo "</tr>";
}	
	
	
	
} else 
{
echo  "aucun enregistrements";
}
//echo mysqli_num_rows($resultat);
echo "</table>";
echo "</from> ";
echo"<div>";

//echo "<div align="center"><input type="button" value="imprimer" onclick="window.print()">
//</div>";

?>
</body>
</html>