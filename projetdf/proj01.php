<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";	

$sql="SELECT niveau FROM `niveau` ";
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

$stl="SELECT filiere FROM `filiere` ";
$q=mysqli_query($con,$stl);
$valeur="";
while ($col=mysqli_fetch_array($q)){
  $valeur=$valeur."<option>".$col[0]."</option>";
}
?>

<?php
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";	

$stl="SELECT code FROM `groupe` ";
$q=mysqli_query($con,$stl);
$val="";
while ($cole=mysqli_fetch_array($q)){
  $val=$val."<option>".$cole[0]."</option>";
}
?>
<html>
 <head>
      <title>projet1</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="joli.css">
	   <style type="text/css">
		.container1 {
		    width: 30%;
            float: right;
			padding: 14px;
			margin: auto;
			margin-top: -450px; 
		}
		.d{
			width:50%;
		     
		}
		
		</style>
    <style>
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
	 
  
  
      
      <form method="POST" action="proj1.php">
	  <fieldset class="d">
	  <div class="container">
	        <div class="color"> <h3> IDANTIFICATION</h3></div>
		    
			<label>Nom :</label>			
			<input type="text" name="nom" required>
			<label>Prénom :</label>
			<input type="text" name="prenom"  required>
			<label>Date de naissance :</label>			
			<input type="date" name="date">
			<label>Lieu de naissance :</label>			
			<input type="text" name="lieu">
		    <label>Nationalité :</label>			
			<input type="text" name="nation">
			<label>Sexe :</label>
			<select name="sexe">
			  <option value="masculin">masculin</option>
			  <option value="femme">femme</option>
			</select>
			<label>NNI :</label>
			<input type="text" name="nni"required>
			</div>
			
			
			<div class="container1">
			<div class="color"> <h3> INSCRIPTION</h3></div>
			<label>Numéro d'inscription :</label>
            <input  type="text" name="nombre" required>
		    <label>Niveau :</label>
		      <select name="niveau">
			     <option><?php echo $option?></option>
			  </select>
			  <label>Filiére :</label>			
			   <select name="fil">
			     <option><?php echo $valeur?></option>
			  </select>
			  <label>Groupe :</label>
		
			  	<select name="G">
			   <option><?php echo $val?></option>
			  </select>
			 </div>
			 
			 <br><br>
			 
			  <div align="center">
             <input type="submit" value="Envoyer">
             <span class="annuler">
			        <a href="http://localhost/projet/index1.php">Annuler</a>
			 </span></div>			
	  
	 </fieldset>
     </form>
   </body>
</html>