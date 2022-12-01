<?php
include("../php/barco.php");
$email=mysqli_real_escape_string($conn,$_POST['email']);
$senha=mysqli_real_escape_string($conn,$_POST["senha"]);

if(empty($email)and empty($senha)){
	header("location:../php/index.php");
}

$sql="SELECT email ,senha  FROM login WHERE email='$email' AND senha='$senha'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
 
	if(($email == $row["email"]) && ($senha == $row["senha"])){
		header("location:../php/painel.php");
		}
	else{
		header("location:../php/index.php");

	}
	
	}

	
			

?>