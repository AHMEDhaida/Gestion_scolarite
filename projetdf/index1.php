<!DOCTYPE html>
<html>
    <head>
	  <title>Projet</title>
	  <meta charset="utf-8">
	  <style>
	  body {
	   font-family: Arial;
	    margin: 0px;
		padding: 0px;
		background: url(IMG.JPG);
		background-size: cover;
		
		
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
	<?php
	session_start();
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";?>
	
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
	 
	</body>
</html>