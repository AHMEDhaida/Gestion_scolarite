<?php
echo"<!DOCTYPE html>";
echo"<html>";
echo"<head>";
echo"<meta charset='UTF-8'>";
echo"<link rel='stylesheet' type='text/css' href='joli.css'>";
echo"</head>";
 
//Connexion avec la base
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";	

//Récupéraion I   
$idetu=$_POST['nom'];

//Récupération de données à modifier 
echo"<div class='container'><div class='color'><h3>Modifier les données d'un etudiant(e)</div></h3>";
echo "<form method='POST' action='modf.php'>";
$sql= "select * from etudiant where numero='$idetu'";   
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($lign=mysqli_fetch_row($resultat)){
	echo"<label>"."id"."</lable>"."<input type='text'  name='numero' value='$lign[0]'>";
	echo"<label>"."numero"."</lable>"."<input type='text'  name='numero' value='$lign[1]'>";
	echo"<label>"."nom"."</lable>"."<input type='text'  name='nom' value='$lign[2]'>"; 
	echo"<label>"."prenom"."</lable>"."<input type='text'  name='prenom' value='$lign[3]'>"; 
	echo"<label>"."date"."</lable><input type='text'  name='date' value='$lign[4]'>"; 
	echo"<label>"."lieu"."</lable><input type='text'  name='lieu' value='$lign[5]'>";
	echo"<label>"."nation"."</lable><input type='text'  name='nation' value='$lign[6]'>";
    echo"<label>"."sexe"."</lable><input type='text'  name='sexe' value='$lign[7]'>";	
	echo"<label>"."NNI"."</lable><input type='text'  name='nni' value='$lign[8]'>";
    echo"<label>"."niveau"."</lable><input type='text'  name='niveau' value='$lign[9]'>";
	echo"<label>"."groupe"."</lable><input type='text'  name='G' value='$lign[10]'>"; 
	echo"<label>"."filiere"."</lable><input type='text'  name='fil' value='$lign[11]'>";
	echo"<input type='submit' value='Modifier'>";

}	
		
} else 
{
echo  "aucun enregistrements";
}
echo"</form>";
echo"</div>";
echo"</body>";
echo"</html>";
?>