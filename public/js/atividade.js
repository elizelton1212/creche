$(document).ready(function(){
   
$('#esconder').click(function(){
$('#tabela-atividades').toggle()




})
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
       
        url:"pesquisarNomeCandengue",
        data:{'nome':$('#Candengue').val(),
              'atividade':$('#atividade').val()  },
        dataType:'text',
        success:function(mensagem){ 
           // $('#retorno').text(mensagem)
atividade = $('#atividade').val()


Mes =$('#Mes').val()

         t = JSON.parse(mensagem)
    


n++
$('#tabela-pagamento').append(`<tr id='f'><td>${n}</td><td>${t.nome}</td><td>${Mes}</td><td>${t.atividade}</td>`)
cand.push($('#Candengue').val())
Atividade.push($('#atividade').val())
mes.push($('#Mes').val())
        }
     
      
    })
    }


});


$("#retorno").hide()
    $('#salvar-atividade').click(function(event){
        event.preventDefault()
     
if($('#descricao').val()=="" || $('#descricao').val()==" " || $('#descricao').val()=="   "){
    
        $('#descricao').css('border','3px solid #FF0000')
    }else if($('#valor').val()=="" || $('#valor').val()==" " || $('#valor').val()=="   "){
    
        $('#valor').css('border','3px solid #FF0000')
    } 
    else{
       
        $.ajax({
       
        url:"cadastrarAtividade",
        data:$('form').serialize(),
        dataType:'text',
        success:function(mensagem){
           // $('#retorno').text(mensagem)
          
            $('#retorno').text(mensagem)
            $('#retorno').show();

            $('#descricao').val('')
            $('#valor').val('')
        

        
           
        }
     

      
    })
 $('#retorno').text('')
    $('#alertdescricao').text('')
    $('#descricao').css('border','')
}


  })

 $('#pagar').click(function() {
   var x =0
   var p

   
     for (var t in cand){
x=x+t
p = t

  $.ajax({
         'url':'paymentA',
          data:{'idCandengue':cand[t],'idAtividade':Atividade[t],'mes':mes[t]},  
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


 $('#salvaratividade').click(function(event){
  event.preventDefault();


$.ajax({

  url:"/updateAtividade",
  data:$('form').serialize(),
  tataType:'text',
  success:function(mensagem){
    
    $('#r').append(`<div class='btn badge-primary'>${mensagem}</div>`);


  }


})


 })
});








(function (win,doc){
  'use strict';
  
  function confirmDel(event) {
      event.preventDefault();
  let token=doc.getElementsByName('_token')[1].value;
      //console.log(event.target.parentNode.href);
      if (confirm('Deseja Mesmo eliminar?')){
  let ajax = new XMLHttpRequest()
  ajax.open('DELETE',event.target.parentNode.href)
  ajax.setRequestHeader('X-CSRF-TOKEN',token)
  ajax.onreadystatechange=function(){
  if(ajax.readyState === 4 && ajax.status === 200){
      console.log('Deu Certo');
      win.location.href  = 'atividade';
  }
  };
  ajax.send();
      }else{
          return false; 
      }
  }
  
  if (doc.querySelector('.js-del')){
  let btn =doc.querySelectorAll('.js-del')
  
      for (let i=0; i<btn.length;i++){
  
          btn[i].addEventListener('click',confirmDel,false);
      }
  
  }
  
  
  
  })(window,document)
  
