<?php include("../conexao/bank.php"); 


?>

<h1>Cadatro De Produto</h1>
				
				<form action="../cadastro/cadasprod.php" method="POST" class="d-inline">
					<input type="text" name="nomee" placeholder="nome do produto" class="w-25 form-control"style="position: absolute;left: 2%;margin-top: 2.4%;">
					<input type="munb" name="quantidades" placeholder="quantidade"class="w-25 form-control d-inline" style="position: absolute;left: 28%;top: 13.3%;">
					<input type="munb" name="valores" placeholder="valor"class="w-25 form-control d-inline" style="position: absolute;left: 54%;top: 13.3%;">
					<select name="tipos" style="position:absolute;left: 2%; top:20.3%;width: 15%;" class="form-select">
						<option value="outros">outros</option>
  						<option value="limpeza">limpeza</option>
  						<option value="eletrico">eletrico</option>
  						<option value="eletronico">eletronico</option>
  						<option value="comida">comida</option>
					</select>
					<button type="submit" name="cadastro" class="btn btn-primary" id="bttn">cadastra</button>
					<button  type="submit"name="consulta" class="btn btn-primary" style="position: absolute;
				left: 36%;top: 20.4%;">consulta</button>
				</form>

				<div id="atual" style="margin-left: 79%;margin-top: 14%;">
					<form action="../php1/atual.php" method="POST">
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
					<table class="table w-100">
						<thead>
							<tr>
								<td>#</td>
								<td>nome</td>
								<td>tipo</td>
								<td>quantidade</td>
								<td>valor</td>
							</tr>
						</thead>
						<tbody>
							<?php  
							$sqlo="SELECT * FROM produto LIMIT 9";
							$result=mysqli_query($conn,$sqlo);

							while ($row=mysqli_fetch_assoc($result)) {
								echo "<tr>
								<td>".$row["id_produto"]."</td>".
								"<td>".$row["nome"]."</td>".
								"<td>".$row["tipo"]."</td>".
								"<td>".$row["quantidade"]."</td>".
								"<td>".$row["valor"]."</td>".
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
