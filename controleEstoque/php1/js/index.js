visao=$("#visao");
produto=$("#produto");
apresentar=$("#apresentar");
mostra=$("#mostra")
fornecedor=$("#fornecedores");

$("#apresentar").load("../telas/visaogeral.php");

visao.click("click",function(event){

$("#apresentar").load("../telas/visaogeral.php");
	

})

produto.click("click",function(event){
	$("#apresentar").load("../telas/cadastroproduto.php");


})

fornecedor.click("click",function(event){

	$("#apresentar").load("../telas/fornecedor.php");
})


mostra.click("click",function(){
	$("#tabela").toggle();
})

$('#btn2').click('click',function(event){
	$('#tela').load("../cadastro/cadastro.php");

})
