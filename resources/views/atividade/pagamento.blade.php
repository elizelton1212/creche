@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

</style>
@section('content_header')
    <h1></h1>
@stop
@section('content')

<div class="box">
 <div class="box">
    
    <div class="box-header">
Pagamento de Atividades
 </div>
<div class="box-body">
<button class='btn btn-primary' id='esconder'><i class='fas fa-arrow-circle-right'> </i></button>

<label>Estudante</label>
<select id='Candengue' required>
<option value=''>--------------</option>
@foreach ($candengues as $c )
<option value='{{$c->id}}' nome='{{$c->nome}}'>{{$c->nome}}</option>
@endforeach
</select>
<label>Mes</label>
<select id='Mes' required>
<option value=''>---------------</option>
<option value='Janeiro'>Janeiro</option>
<option value='Fevereiro'>Fevereiro</option>
<option value='Março'>Março</option>
<option value='Abril'>Abril</option>
<option value='Maio'>Maio</option>
<option value='Junho'>Junho</option>
<option value='Julho'>Julho</option>
<option value='Agosto'>Agosto</option>
<option value='Setembro'>Setembro</option>
<option value='Outubro'>Outubro</option>
<option value='Novembro'>Novembro</option>
<option value='Dezembro'>Dezembro</option>
</select>
<label>atividade</label>
<select id='atividade' required>
<option value=''>--------------</option>
@foreach ($atividades as $a)
<option value='{{$a->id}}' descricao='{{$a->descricao}}'>{{$a->descricao}}</option>

    
@endforeach



</select>
<input type='hidden' id ='n'>
<input type='hidden' id='a' >
<button type='button' id='s' class='btn btn-primary'><span><i class='fas fa-plus'></span></i></button>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
</div></div><div class="row">
<div class="col-sm-12">
<table id="tabela-atividades" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Descrição</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Preço</th>

</tr>
</thead>
<tbody>
@foreach($atividades as $a)
<tr>
<td>
{{$a->id}}
</td>
<td>
{{$a->descricao}}
</td>
<td>
{{$a->valor}}
</td>
</tr>    
@endforeach
</tbody>
</table>
 </div>
 </div>

 </div>
 
 </div>
<div  id='pagamento'>
<hr class='tex-center'>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
</div></div><div class="row">
<div class="col-sm-12">
<table id="tabela-pagamento" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nº</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Mes</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Atividade a ser Paga</th>
</tr>
</thead>
<tbody>


</tbody>

</table>
</div>

<button type='button' id='pagar'>Efectuar Pagamento</button><button type='button' id='imprimir'>Imprimir</button>
</section>
<center id='alerta'></center>
<script src='{{asset('js/jquery.min.js')}}'></script>

<script src='{{asset('js/atividade.js')}}'></script>
@stop