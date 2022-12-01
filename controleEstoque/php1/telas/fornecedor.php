<?php include("../conexao/bank.php"); ?>

<h1>Fornercedores</h1>
				<form id="fornecedor" action="/casdastro/cadastro_fornecedor.php" method="POST" class="d-inline">
					<input type="text" name="fornecedor" placeholder="nome do fornecedor" max="45" class="w-25 form-control"style="position: absolute;left: 2%;margin-top: 2.4%;">
					<input type="munb" name="produto" max="45" placeholder="produto"class="w-25 form-control d-inline" style="position: absolute;left: 28%;top: 13.3%;">
					<input type="munb" name="quantidade" placeholder="quantidade"class="w-25 form-control d-inline" style="position: absolute;left: 54%;top: 13.3%;">
					<input type ="text" name="local" placeholder="localização" max="45" style="position:absolute;left: 2%; top:20.3%;width: 25%;" class="form-control">
						
					<button id="boton" type="submit" class="btn btn-primary " style="width:15%;margin-top: 6.8%;margin-left: 31%;" id="bttn">enviar</button>
				</form>
				<div id="atual" style="margin-top:4%;margin-left: 78%">
				<form action="../atualiza/atual.php" method="POST">
					<h2>atualiza</h2>
					<input type="text" name="id" placeholder="id" class=" form-control w-25">
					<input type="text" name="nomer" placeholder="nome" class=" form-control w-75">
					<input type="text" name="tipor" placeholder="tipo" class="form-control w-75">
					<input type="munb" name="quantida" placeholder="quantidade" class="form-control w-75">
					<input type="munb" name="valos" placeholder="valor" class="form-control w-75">
					<input type="submit" value="enviar" class="btn btn-primary w-75">
				</form>
			</div>
				<div id="cad" class="bg-light">
					<table class="table">
						<thead>
							<tr>
								<td>#</td>
								<td>nome</td>
								<td>produto</td>
								<td>quantidade</td>
								<td>localização</td>
							</tr>
						</thead>
						<tbody>
							<?php  
							$sqlo="SELECT * FROM fornecedor";
							$result=mysqli_query($conn,$sqlo);

							while ($row=mysqli_fetch_assoc($result)) {
								echo "<tr>
								<td>".$row["id"]."</td>".
								"<td>".$row["nome"]."</td>".
								"<td>".$row["produto"]."</td>".
								"<td>".$row["quantidade"]."</td>".
								"<td>".$row["localizacao"]."</td>".
								"<td>".'<button class="btn btn-danger w-100">delete</button>'."</td>".
								"<td>".'<button class="btn btn-warning w-100" id="upadate">update</button>'."</td>".
								"<td>".'<button class="btn btn-success w-100">concluir</button>'."</td>"
								."</tr>";
							}


							?>
						</tbody>

					</table>	
				</div>

			<script type="text/javascript">
				$("#atual").hide();
				$("#upadate").click("click",function(){
				$("#atual").toggle(100)
	
				})
			</script>