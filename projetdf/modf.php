<?php
 
//Connexion avec la base
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";	


   //Récupération de données

$pr=$_POST['nom'];
$no=$_POST['prenom'];
$da=$_POST['date'];
$li=$_POST['lieu'];
$na=$_POST['nation'];
$se=$_POST['sexe'];
$nn=$_POST['nni'];
$niv=$_POST['niveau'];
$gr=$_POST['G'];
$fl=$_POST['fil'];
//$b=$_GET['num'];
//Modification de données

$sql= "update  etudiant  set nom='$pr', prenom='$no', date='$da', lieu='$li', nation='$na', sexe='$se', nni='$nn', niveau='$niv', gr='$gr',filiere='$fl' where nni='$nn'";


$pr=mysqli_query($con, $sql);
if ($pr) {
	//Réorientation vers la page liste_etu.php 
header ("location:http://localhost/projet/index.html");
}		
 else //http://localhost/projet_m/list.php
{
echo "Erreur de modification";
}

?>


