



<!DOCTYPE html>
<html>
<head>




<style>
body{
		 
	    margin: 0px;
		padding: 0px;
		background: url(IMG.JPG);
		background-size: cover;
		
}
.login{
	width:380px;height:420px;
	top:50%;left:50%;
	background-color: lavande;
	color:BLACK;position:absolute;
	transform:translate(-50%,-50%);
	box-sizing:border-box;
	padding:70px 30px;
	border-radius:15px;
	
}

h1{
	margin:-22px;padding:0 0 22px;
	text-align:center;
}
.login p{
	margin-top: 10px;;padding:0;
	font-SIZE:18PX;;
}
.login input{
	width:100%;margin-bottom:10px;
	border:none;border-bottom:1px solid #fff;background:transparent;outline:none;height:40px;color:#fff;font-size:15px;margin-top:5px;
}
.login input[type="password"]{
	
	border:none;border-bottom:1px solid #fff;background:transparent;outline:none;height:40px;color:#fff;font-size:15px;margin-top:5px;
}
.login input[type="submit"]{
	border:none;outline:none;height:40px;background:Orange;color:#fff;font-size:23px;border-radius:25px;margin-top: 25px;
}
.login input[type="submit"]:hover{
	cursor:pointer;
	background:#eee;color:#000;
}
</style>

</style>
</head>
<body>



<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("eurreur de type" .mysqli_connect_error()); }
else "OK";

$sql="select * from passe";
$resul=mysqli_query($con,$sql);
$num=mysqli_num_rows($resul);
$yes=isset($_GET['yes']) ? $_GET['yes'] : null;
$no=isset($_GET['no']) ? $_GET['no'] : null;
$nom=isset($_POST['name']) ? $_POST['name'] : null;
$mot=isset($_POST['password']) ? $_POST['password'] : null;
if($yes){
mysqli_query($con,"insert into passe (`nom`,`motpass`) values ('$nom','$mot');");
header('location:index1.php');
}
if($no){
$mot=isset($_POST['password']) ? $_POST['password'] :null;
$b=mysqli_query($con, "select * from passe");
$resul=[];
$resul= mysqli_fetch_row($b);
$v=$resul[2];
if($mot==$v){header('location:index1.php');exit;}else{
header('location:?msg=9');exit;
}
}
if(!$num){
	echo "<center><div class='login'><h1>Enter dans votre Conect</h1>";
		echo "<form method='post' action='?yes=1'>";
		echo "<p>Votre nom: </p><input type='text' name='name'placeholder='Entrer votre nom'>";
		echo "<p>Mot de passe:</p><input type='password' name='password'placeholder='Entrer votre password'>";
		echo "<input type='submit' name=''value='OK'>";

		echo "</form>";
	echo "</div></center>";
}else{?>

<div class="login">
	<!--<img src=".jpg" name="" id="image">-->
		<h1>Enter dans votre Conect</h1>
		<form method="post" action="?no=$nn">
		
		<p>Mot de passe:</p><input type="password" name="password"placeholder="Enter your password">
		<input type="submit" name=""value="OK">
<!--<a href="#">Lost your password?</a><br>
		<a href="#">D'ont have an account</a>-->
		</form>
	</div>
	
</body>
</html>
<?php } ?>
<script>
	if(<?=$_GET['msg']?>)
	alert("mot de passe pas correct");</script>