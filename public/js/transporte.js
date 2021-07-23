$(document).ready(function(){

   
   
    $('#salvar-transporte').click(function(event){
        event.preventDefault();
        var partida = $('#pontoPartida').val()
        var chegada = $('#pontoChegada').val()
        var preco = $('#preco').val()       
        
if(partida=="" || partida==" " || partida=="   "){
    
    $('#pontoPartida').css('border','3px solid #FF0000')
}else if(chegada=="" || chegada==" " || chegada=="   "){

    $('#pontoChegada').css('border','3px solid #FF0000')
} else if(preco=="" || preco==" " || preco=="   "){

    $('#preco').css('border','3px solid #FF0000')
} 

else{
        
        $.ajax({
            'url':'salvarTransporte',
            data:$('form').serialize(),
            dataType:'text',

            success:function(mensagem){
                $('#retorno').text(mensagem)
            }


        });}





    });



    var n=1
    
    let Candengue= []
    let Transporte= []
    var controlador =1
    let Mes = []
    let OBS =[]
  $('#s').click(function(event){

    event.preventDefault();
    var mes = $('#mes').val();
    var transporte = $('#transporte').val();
    var candengue = $('#candengue').val();
    var obs =$('#obs').val();

    $.ajax({

        url:'pesquisarTransporte',
        data:$('form').serialize(),
        dataType:'text',

        success:function(mensagem){
            var t = JSON.parse(mensagem);
            

        $('#tabela-pagamento').append(`<tr><td>${n}</td><td>${t.candengue}</td><td>${mes}</td><td>${t.transporte}</td></tr>`)
            n=n+1;
            Transporte.push($('#transporte').val());
            Candengue.push($('#candengue').val());
            Mes.push($('#mes').val());
            OBS.push($('#obb').val());

            
            

        }




    })

$('#pagar1').click(function(event){
    event.preventDefault()
var x


    for (var t in Transporte) {
        controlador = controlador +(parseInt(t))
     x = controlador;
     
     $.ajax({
        url:'pagarTransporte1',
        data:{
            'transporte_id':Transporte[t],
            'candengue_id':Candengue[t],
            'Observacao':OBS[t],


        },        

        success:function(mensagem){

          

        }


     })
        
    }
    if(controlador == x){
        $('#r').remove()

        $('#alerta').append(`<div id=r class='btn btn-success'>Pagamento Efectuado Com Sucesso</div>`)
        $('#t').remove();  
       
    }else{

        $('#alerta').append(`<div id='r' class='btn btn-success'> O Pagamento Não Foi Efectuado Com Sucesso</div>`)

  
    }


})
  

});
    

$('#alterarDados').click(function(event){
event.preventDefault()
    $.ajax({
        url:'/updateTransporte',
        data:$('form').serialize(),
        dataType:'text',

        success:function(mensagem){

            $('#r').text(mensagem)

        }


    })

})



});