<?php
include("../php1bank.php");
?>
<form  method="POST" id="formm">
		<h1>cadastra-se </h1>
		<input type="email" name="eemail" id="email" placeholder="email">
		<input type="password" name="ssenha" placeholder="senha">
		<input type="password" name="csenha" placeholder="confirmar a senha">
		<input type="submit" name="bttn" value="entrar" id="btn">
		
	</form>

	
	<?php

	if(isset($_POST['btnn'])){
		if (empty($_POST['eemail'] and empty($_POST['ssenha']) and empty($_POST['csenha']))){
			header("location:../php/cadastro.php");
			close();
	}
		$csenha=$_POST["csenha"];
		$ssenha=$_POST["senha"];
		$eemail=$_POST["eemail"];
	
	if(($csenha == $csenha) and (ssenha == ssenha) and ($eemail == $eemail)){

		$srl="INSERT INTO usuario(email, senha) VALUES($eemail,$ssenha)";
		mysqli_master_query( $conn, $srl);
		header("location:../php1/cadastro.php");

		}
	}



	?>