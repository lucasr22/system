<!DOCTYPE html>
<html>
	<head>
		 <meta charset="utf-8">
     	 <meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" type="text/css" href="../css/painel.css">
      	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<title>contabilize</title>
	</head>
	<body id="conteudo">
		<?php include("../php/barco.php");?>
		<nav id="nav"></nav>
		<aside id="painel">
				<button id="grafico"  class="button">
					<i class="bi bi-bar-chart-fill"></i>
						<h4>Grafic</h4>
				</button>
				<button id="livro" class="button">
					<i class="bi bi-book-fill"></i>
							<h4>Book</h4>
					</button>
				<button id="trans" class="button">
							<i class="bi bi-currency-dollar"></i>
							<h4>transporte</h4>
					</button>
			
		</aside>

			<?php 
			//o grafico de domnstrativo  reside a qui no painel02

			?>
			<article id="demonstrativos">
				<h1>Gráfico De Gastos</h1>

				<div id="demon">
					    <div id="barra" style="width: 900px; height: 500px;margin-left: 4.5%;margin-top: 2%;border-radius: 5px;padding-left: 2%;"></div>

				</div>
			</article>

			<?php
			//o grafico de domnstrativo  reside a qui no painel03

			?>

			<article id="book">
				
			
			 	
			  		
			  		
				<?php
				$name=$_POST["po"];
			  		$gasto=$_POST["gasto"];
			  		$sgl="INSERT INTO gestao(nome,saldo) VALUES('$name','$gasto');";
			  		$reslt=mysqli_query($conn,$sgl);
			  	?>	
			  		
			  		
				</form>
				
			</article>
                        

			<article id="transporte">
				
				
			</article>
			
			<?php
			// a tela da vida financeira 

			?>
			
				
 		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 		
 		<script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
      		google.charts.setOnLoadCallback(drawStuff);

      		function drawStuff() {
       		 var data = new google.visualization.arrayToDataTable([
	          ['gasto total', 'Percentage'],
	          ["salario",20 ],
	          ["transporte", 31],
	          ["gasto supérfluo", 12],
	          ["gastos essenciais", 10],
	          ['Other', 13]
	        	]);

        	var options = {
	           width: 1000,
	           height: 450,
	           legend: 'none',
	           bar: {groupWidth: '70%'},
	           vAxis: { gridlines: { count: 5 } },
         	};

		        var chart = new google.charts.Bar(document.getElementById('barra'));
		       chart.draw(data, google.charts.Bar.convertOptions(options));
		      };
    </script>
		
	
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
	</body>
</html>