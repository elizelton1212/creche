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


<label>Estudante</label>
<select id='Candengue' >
<option value=''>--------------</option>
@foreach ($candengues as $c )
<option value='{{$c->id}}' nome='{{$c->nome}}'>{{$c->nome}}</option>
@endforeach
</select>
<label>Mes</label>
<select id='Mes'>
<option value=''>---------------</option>
@foreach ($propinas as $pro )
    <option value='{{ $pro->id }}'>{{ $pro->mes }}</option>
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

<script src='{{asset('js/propina.js')}}'></script>
@stop