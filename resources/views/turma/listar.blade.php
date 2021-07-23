@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')

@stop

@section('content')


<div class="box">
    
    <div class="box-header">
Turmas
 </div>
 <div class="box-body">

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
              <!-- /.card-header -->
<div class="card-body">
<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
</div></div><div class="row">
<div class="col-sm-12">

@csrf
<div id ='dados'>
 <center> <img src='{{asset('img/logo1.png')}}' style='max-width: 150px'><br> Turma:<strong> {{ $turmas }}</strong></center>

<table id="tabela-transporte" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nº</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Idade</th>
</tr>
</thead>
<tbody>
@php
    $n=1;
@endphp
@foreach ($tcs as $t)
<tr>


<td>{{ $n}}</td>

<td>{{ $candengues->find($t->candengue_id)->nome }}</td>
<td>{{ $candengues->find($t->candengue_id)->idade }}</td>

</tr>
@php
    $n=$n+1;
@endphp
@endforeach
</tbody>
</table>  

</div>
<button type='button' onclick='funcao_pdf()'><i class ='fas fa-print'></i></button>


</div>

</div>
</div>
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/turma.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>

<script> 

function funcao_pdf() {
	
	var pegar_dados = document.getElementById('dados').innerHTML
	var janela = window.open('','','width=800,heigth=600')

	janela.document.write('<html><head>');
	janela.document.write('<title>PDF</title></head>');
	janela.document.write('<center>');


    janela.document.write(pegar_dados);
    janela.document.write('</center>');
	janela.document.write('<hr>');

	janela.document.write('</body></html>');

	janela.print();
}


</script>



@stop
