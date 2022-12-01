<?php include("../php/barco.php"); ?>


					<h1>Book De Demonstrativos</h1>
			<div id="boolk">
				<table cellspacing="1">
					<tr>
			    		<th>nome</th>
			   			 <th>gasto</th>  
			  		</tr>
			  		<?php
			  				
						$rsl="SELECT * FROM gestao";
			  			$rt=mysqli_query($conn,$rsl);

			  			while($ty=mysqli_fetch_assoc($rt)){
			  			echo "<tr><td>".$ty["nome"]."</td>"."<td>"."R$".$ty["saldo"].",00"."</td>"."</tr>";

			  		}

			  		

			  		?>

			  				</table>
			 		</div>
			<form action="../php/painel.php" method="POST">
					<div id="luc">
							<input type="text" name="po" placeholder="nome">
							<input type="text" name="gasto" placeholder="gasto">	
							<input type="submit" value="enviar" class="enviar">
					</div>

				