
$("#book").hide();
$("#transporte").hide();
$("#life").hide();


$("#grafico").click(function(){
$("#demonstrativos").toggle()
    

})

$("#livro").click(function(){
$("#book").toggle()
 $("#book").load("../php/book.php");   
})

$("#trans").click(function(){
    $("#siderbar").hide()

    $("#transporte").toggle().load("../php/trans.php");
})

$("#vida").click(function(){
    $("#life").toggle();
})



$("#boolk").mouseenter(function(){
    $("#boolk").css("overflow","auto");
})

$("#siderbar").hide()
$("#btn").click(function(){
    $("body").load("../php/cadastro.php");
})




$("#barra").animate({width:"900px"},1000)
.animate({heigth:"500px"},1000)


$("#nav").hide();