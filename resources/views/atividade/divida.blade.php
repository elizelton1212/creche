@extends('adminlte::page')

@section('title', 'CandenguesTrezimar')

@section('content_header')

@stop

@section('content')


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
@php
    $n = 1;
@endphp
<table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Mes</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Atividade</th>

</tr>
</thead>
<tbody>
@foreach ($devedores as $d )
@php
$c =$candengues->find($d->candengue_id);
$a =$atividade->find($d->atividade_id);    
@endphp
<tr>
<td>{{ $d->id }}</td>
<td>{{ $c->nome }}</td>
<td>{{ $d->mes }}</td>
<td>{{ $a->descricao }}</td>

</tr>
    
@endforeach


</tbody>
</table>

<button  type='button' id='imprimir' class='btn bg-gradient-secondary'><i class='fas fa-print'></i></button>
<script src='{{ asset('js/jquery.min.js') }}'></script>
<script src='{{ asset('js/atividade.js') }}'></script>

@stop