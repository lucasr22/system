					<h1>Transporte</h1>
				
				
					<div id="inst"></div>
				<form id="form"  method="POST" >
					<input type="text" name="valor" id="valor" placeholder="quantas passagem voce usar">
					<input type="text" name="combustivel" id="combustivel" placeholder="combustivel">
					<input type="submit" name="enviar" id="enviar">
				</form>
				<div id="siderbar">
					<h2>demonstrativo de transporte</h2>
					<hr>
					<h2>transporte publico:</h2>
					<div id="passagem"></div>
					<div id="tipo"></div>
					<div id="mes"></div>
					<div id="anoo"></div>
					</div>
					

					<script type="text/javascript">
						$("#enviar").click(function(event){
						  event.preventDefault();;
  							$("#siderbar").toggle();  
  							var valor=document.getElementById("valor").value;
  							var valor_real=valor*4.05;
  							var mest=valor_real*31;
  							var ano=mest*12;
  							var anos=document.getElementById("anoo")
  							var passagem=document.getElementById("passagem")
  							var tipo=document.getElementById("tipo");
  							var mess=document.getElementById("mes");
  							mess.innerHTML="<h3>ao mes: $"+mest+"</h3>"
  							passagem.innerHTML="<h3>valor da passagem: $"+valor_real+"</h3>";
  							tipo.innerHTML="<h3>tipo: onibus"+"</h3>";
  							anos.innerHTML="<h3>ao ano: $"+ano+"</h3>"
								})

					</script>