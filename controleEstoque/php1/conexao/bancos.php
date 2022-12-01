<?php

$host="localhost";
$username="lucas";
$pass="123456";
$db="lojatest";

$conn=mysqli_connect($host,$pass,$db,$username);

	
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$senha=mysqli_real_escape_string($conn,$_POST['senha']);


		$sql="SELECT email, senha FROM usuarios WHERE email={'$email'} AND senha={'$senha'}";
		$po=mysqli_query($conn,$sql);


		while ($mp=mysqli_fetch_assoc($po)) {
	
			echo "<h1>".$mp["email"]."</h1>";
		
		}

	if(empty($_POST['email']) and empty($_POST['senha'])){
		header("location:../php1/index.html");
	}
	else if($mp["email"] == $email and $mp["senha"] == $senha){
		
		
		header("location:../telas/painelEstoque.php");
	}














?>