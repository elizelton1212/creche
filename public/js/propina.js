$(document).ready(function(){
   
    
    let cand=[]
    let mes =[]
    let Atividade =[]
    var n = 0 
    var nome,Mes,atividade,t
    $('#s').click(function(){
    $('#r').remove()
       if($('#Candengue').val() == ''){
    
           $('#retorno').text('O Campo de Candengue deve ser selecionado')
       }else{
        $.ajax({
           
            url:"prop",
            data:{'candengue':$('#Candengue').val(),'mes':$('#Mes').val()},
            dataType:'text',
            success:function(mensagem){ 
    
        Mes =$('#Mes').val()
    
             t = JSON.parse(mensagem)
        
    
    
    n++
    $('#tabela-pagamento').append(`<tr id='f'><td>${n}</td><td>${t.candengue}</td><td>${t.mes}</td></tr>`)
    cand.push($('#Candengue').val())
    //Atividade.push($('#atividade').val())
    mes.push($('#Mes').val())
            }
         
          
        })



        }
    
    
    });
    
    
    $('#pagar').click(function() {
        var x =0
        var p
        var data = new Date();
    var ano =  data.getFullYear();
        
          for (var t in cand){
     x=x+t
     p = t
     
       $.ajax({
              'url':'pagamentoPropina',
               data:{'candengue':cand[t],'ano':ano,'mes':mes[t]},  
                 success:function (mensagem) {
                   
                 }
             
     
     
     
          })
     
     cand.pop(t)
     Atividade.pop(t)
     mes.pop(t)
     
          }
     
        
     
     
         if(x==p){
     
     alert('Erro ao Cadastrar')
     
     
         } else{
     
     
           //  alert('Dados Cadastrados Com sucesso')
             n=0
     
             $('#f').remove()
     
           $('#alerta').append('<div id="r" class="btn btn-success">Dados Cadastrados Com Sucesso</div>') 
            
         }
          
        
     
      })
     

      $('#imprimir').click(function(){

 
        window.addEventListener("load", window.print());
      
       })
    });