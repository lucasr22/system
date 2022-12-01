<?php 

include "../php1/bank.php";


	$nome=$_POST['fornecedor'];
	$produto=$_POST['produto'];
	$quantidade=$_POST['quantidade'];
	$localizacao=$_POST["local"];
	$telefone=$_POST["telefones"];

	$sqly="INSERT INTO fornecedor(nome,produto,quantidade,localizacao)
	VALUES('$nome','$produto','$quantidade','$localizacao');";
	
if (mysqli_query($conn, $sqly)) {
  	header("location:../php1/painelEstoque.php");
	} else {
  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);





?>