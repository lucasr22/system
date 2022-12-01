<?php 

include "../conexao/bank.php";

$id=$_POST["id"];
$nomes=$_POST["nomer"];
$tipor=$_POST["tipor"];
$quantida=$_POST["quantida"];
$valos=$_POST['valos'];

	
	$updates="UPDATE produto set nome='$nomes',tipo='$tipor',quantidade='$quantida',valor='$valos' where id_produto='$id' ";

	if(mysqli_query($conn,$updates)) {
		header("location:../telas/painelEstoque.php");
		close();
	}else{
		echo" não foi ";
	}



var_dump($_POST);





?>