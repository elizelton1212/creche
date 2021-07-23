@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')

@stop

@section('content')


<div class="box">
    
    <div class="box-header">
Atividades
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


<table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Descrição</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="Browser: activate to sort column ascending">Preço</th>







<th class="sorting" tabindex="0" aria-controls="example2" aria-label="CSS grade: activate to sort column ascending">Ações a Executar</th>
<th class="text-center" width="150px">
<button class="btn btn-primary" id="cadastrarAtividade"  data-toggle="modal" data-target="#modal-atividade">
<Strong>Cadastrar</i></strong>
</th>
</tr>
</thead>
<tbody>
@foreach ($atividades as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->descricao}}</td>
<td>{{$c->valor}}</td>

<td>

    <a href="{{url("atividade/$c->id")}}" class='show-modal btn btn-info btn-sm'>
        <i class="fas fa-eye"></i>
        </a>
        <a href="{{url("atividade/$c->id/edit")}}" class="edit-modal btn btn-warning btn-sm">
        <i class="fas fa-pencil-alt"></i>
        </a>
       <a href="{{url('atividade/$c->id')}}" class="delete-modal btn btn-danger btn-sm">
      <i class="fas fa-trash"></i>
       </a>

</td>
</tr>
@endforeach
</tbody>
</table>  
    
</div>
</div>
</div>
</div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/atividade.js')}}"></script>

@stop