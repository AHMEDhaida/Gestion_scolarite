<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="emp.css">
</head>
		 
<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";
//recperation    
$f=$_POST['nom']; 
$n=$_POST['no']; 

//Affichage de données
echo "<h3>"."Liste des etudiant"."</h3>";
echo "<table border>";
echo "<tr>";
echo "<th>". " filiere ". "</th>" ;
echo "<th>". "Nineau". "</th>" ;
echo "<th>". "Nombre". "</th>" ;
echo "</tr>" ;

	$sql= "select filiere ,niveau, COUNT(numero) from etudiant where filiere ='$f' AND niveau='$n' ";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
    echo "<tr>";
    echo"<td>". $lign[0]."</td>"; 
    echo "<td>".$lign[1]."</td>";
    echo "<td>".$lign[2]."</td>";
 echo "</tr>";
}   
    
    
    
} else 
{
echo  "aucun enregistrements";
}
//echo mysqli_num_rows($resultat);
echo "</table>";

?>