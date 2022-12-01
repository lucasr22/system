<?php include("../conexao/bank.php");

?>
				<div class="conteiner-fluid">
				<div class="row">
			<div class="card bg-primary w-25" style="margin-left: 4%;margin-top: 3%;width: 30%;">
				<div class="card-header text-white"><h5>Estoque</h5></div>
				<div class="card-body">
					<ul>
						
						<li class="text-white"><h6><h6></li>
						<li class="text-white"><h6>Quantidade De Produto:
						<?php  
						$ol="SELECT quantidade FROM produto LIMIT 1;";
						$res=mysqli_query($conn,$ol);
						while($re=mysqli_fetch_assoc($res)){

						 echo $re["quantidade"];
						}
						?>
							
						</h6></li>
						<li class="text-white"><h5>saida de produto:</h5></li>
					</ul>	
				</div>
			</div>
			<div class="card bg-success w-25" style="margin-left: 4%;margin-top: 3%;width: 30%;">
				<div class="card-header text-white"><h5>Finança</h5></div>
				<div class="card-body">
					<ul>
						<li class="text-white"><h6>Inflação: -0,29<h6></li>
						<li class="text-white"><h6>Taxa Selic: 13,75</h6></li>
						<li class="text-white"><h5>vendas: -0,1</h5></li>
					</ul>	
				</div>
			</div>
			<div class="card bg-danger" style="margin-left: 4%;margin-top: 3%;width: 30%;">
				<div class="card-header text-white"><h5>Alerta</h5></div>
				<div class="card-body">
					<ul>
						<li class="text-white"><h6>Produto Cadastro:<h6></li>
						<li class="text-white"><h6>Quantidade De Produto:</h6></li>
						<li class="text-white"><h5>saida de produto:</h5></li>
					</ul>	
				</div>
			</div>
		</div>
			<h1 style="margin-top:6%"> tabela de demonstração</h1>
			<div id="atual">
				<form action="../atualiza/atualiza.php" method="POST">
					<h2>atualiza</h2>
					<input type="text" name="id" placeholder="id" class=" form-control w-25">
					<input type="text" name="nomer" placeholder="nome" class=" form-control w-75">
					<input type="text" name="tipor" placeholder="tipo" class="form-control w-75">
					<input type="munb" name="quantida" placeholder="quantidade" class="form-control w-75">
					<input type="munb" name="valos" placeholder="valor" class="form-control w-75">
					<input type="submit" value="enviar" class="btn btn-primary w-75">
				</form>
			</div>
			<table class="w-75 table" id="tabela">
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
							$sqlo="SELECT * FROM produto LIMIT 5";
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

			<script type="text/javascript">
			$("#atual").hide();
			$("#upadate").click("click",function(){
			$("#atual").toggle(100)
			})


</script>