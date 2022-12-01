<?php

				include "../php1/bank.php";

						$nome=$_POST['nomee'];
						$tipo=$_POST['tipos'];
						$quantidade=$_POST['quantidades'];
						$valor=$_POST["valores"];


					function cadastro($conn,$cadastro=$_POST["cadastro"]){	
						$sqe="INSERT INTO produto(nome,tipo,quantidade,valor)
						VALUES('$nome','$tipo','$quantidade','$valor')";

						if(mysqli_query($conn,$sqe)){
							header("location:../php1/painelEstoque.php");
						}
						else{
							echo "não foi sucesso";
						}
					}


?>