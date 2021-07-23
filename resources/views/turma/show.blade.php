@extends('adminlte::page')

@section('title', 'CandenguesTrezimar')

@section('content_header')

@stop

@section('content')
<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Turma Selecionada</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div id='dados'>
   <div class='form-control'><strong>Descrição:</strong>{{ $turmas->descricao }}</div>
   </div>
   </div>
   </div>
<button type='button' onclick='funcao_pdf()'><i class ='fas fa-print'></i></button>


<script> 

function funcao_pdf() {
	
	var pegar_dados = document.getElementById('dados').innerHTML
	var janela = window.open('','','width=800,heigth=600')

	janela.document.write('<html><head>');
	janela.document.write('<title>PDF</title></head>');
	janela.document.write(pegar_dados);

	janela.document.write('</body></html>');

	janela.print();
}


</script>

   
@stop