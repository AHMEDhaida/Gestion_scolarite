<!DOCTYPE html>
<html>
 <head>
      <title>projet5</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="joli.css">
	  
<?php
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";	

$sql="SELECT nom FROM `coordinatuer` ";
$resultat=mysqli_query($con,$sql);
$option="";
while ($row=mysqli_fetch_array($resultat)){
  $option=$option."<option>".$row[0]."</option>";
 
}
?>

<?php
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";	

$stl="SELECT nom FROM `departement` ";
$x=mysqli_query($con,$stl);
$var="";
while ($col=mysqli_fetch_array($x)){
  $var=$var."<option>".$col[0]."</option>";
 
}
?>
  <style>
  .c{ 
  background-color:#eee;
 
  }
	  body {
	   font-family: Arial;
	    margin: 0px;
		padding: 0px;
		background: url(IMG.JPG);
		background-size: cover;
		background-position: center;
		background-position: fixed;
	  }
	  
	  ul {
	    list-style-type: none;
		margin: 0;
		padding: 0;
		width: 20%;
		background-color: #f1f1f1;
		position: fixed;
		overflow: auto;
	   
	  }
	  li a {
	     display: block;
		 color: #000;
		 padding:8px 16px;
		 text-decoration: none;
          		 
	  }
	  li a.active {
	  background-color: #4CAF50;
	  color: white;
	  }
	  li a:hover:not(.active) {
	  background-color: #555;
	  color: white;
	  }
	  .i {
	    background-color: #4CAF50;
	    margin:0;
		padding:0;
		width: 100%;
		height:50px;
		position: fixed;

		color: #4CAF50;
	  }
	  
	  .suit {
	  margin: 100%;
	  padding:100%;  
	  border-radius:4px;
	  }
	  h3{
	      
		  text-align:center;
		  color:white;
	  
	  }
	  </style>
	</head>
	<body>
      <div class="i"><h3> Gestion de scolarité</h3></div>
	   <br> <br><br>  
	  <ul>
	    <li>
		   <a class="active">MENU</a>
		</li>
		<li>
		   <a href="http://localhost/projet/proj01.php">Ajouter Etudiant</a>
		</li>
		<li>
		   <a href="proj3.html">Ajouter Niveau</a>
		</li>
		<li>
		   <a href="http://localhost/projet/proj05.php">Ajouter Filière</a>
		</li>
		<li>
		   <a href="proj2.html">Ajouter Coordinateur</a>
		</li>
		<li>
		   <a href="proj6.html">Ajouter département</a>
		</li>
		<li>
		   <a href="proj4.html">Ajouter Group TD/TP</a>
		</li>
		
		<li>
		   <a href="proj7.html">Ajouter Module</a>
		</li>

	  </ul>
	  <BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><br>
	  <span class="suit">
	  <ul>
	    <li>
		   <a class="active">Accueil</a>
		</li>
		<li>
		   <a href="pro.html">Liste des Etudiants</a>
		</li>
		<li>
		   <a href="http://localhost/projet/list_proj7.php">Liste des Modules</a>
		</li>
		<li>
		   <a href="p.html">Crtificat</a>
		</li>
		<li>
		   <a href="prt.html">Nembres de Etudiants</a>
		</li>
		<li>
		   <a href="new 1.html">Modifier</a>
		</li>
	  </ul>
	  </span>
      <div class="container">
	    
		<form method="POST" action="proj5.php">
		<fieldset class="c">
		<div class="color"><h3>Filière</h3></div>
		<label>Nom de filière :</label>
		<input type="text" name="fil" required>
		
		<label>Nom de département :</label>
		<select name="dep">
		     <option><?php echo $var?></option>
		 </select>
		
		
		<label>Nom de coordinateur :</label>
		<select name="coor">
		     <option><?php echo $option?></option>
	    </select>
		
		
		<div class="d">
		<input type="submit" value="Envoyer">
		<span class="annuler">
			  <a href="http://localhost/projet/index1.php">Annuler</a>
	    </span>
		</div>
		</fieldset>
		</form>
	  </div>
  </body>
</html>