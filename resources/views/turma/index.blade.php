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
<form action='{{ url('consultarTurma') }}' method='post'>
              @csrf
              <input type='text' name='turma' placeholder='Procurar' required>
              <button type='submit' class='btn-dark'><i class='fas fa-search'></i></button>
              </form>
@csrf
<table id="tabela-transporte" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2" aria-label="CSS grade: activate to sort column ascending">Ações a Executar</th>

<th class="text-center" width="150px">
<button class="btn btn-primary" id="cadastrarAtividade"  data-toggle="modal" data-target="#modal-transporte">
<Strong>Cadastrar</i></strong>
</th>
</tr>
</thead>
<tbody>
@foreach ($turmas as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->descricao}}</td>

<td>

        <a href="{{url("turma/$c->id")}}" class='show-modal btn btn-info btn-sm'>
        <i class="fas fa-eye"></i>
        </a>
        <a href="{{url("turma/$c->id/edit")}}" class="edit-modal btn btn-warning btn-sm">
        <i class="fas fa-pencil-alt"></i>
        </a>

        @can('cadastrar_funcionario')
       <a href="{{url("turma/$c->id")}}" class="js-del">
      <button class ='btn-danger'><i class="fas fa-trash"></i></button>
       </a>    
        @endcan
      

</td>
</tr>
@endforeach
</tbody>
</table>  
{{ $turmas->links() }}    
</div>
<a href='{{ url('imprimirTurma') }}'><i class ='fas fa-print'></i></a>

</div>
</div>
</div>
</div>
<div class="modal fade"  id="modal-transporte" > 
    <div class="modal-dialog">
    <div class="modal-content background-primary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Turma</h4>
    </div>
    <div class="modal-body">
    
    <div class="card card-primary">
    <center> <div id="retornoTransporte"></div></center>
    <form >
                            {!! csrf_field()!!}
                            <div class="card-body">
 <div class="form-group">
 <input type="txt" class="required" name='descricao' id="descricao" placeholder="Nome da Turma">
</div>
    <div class="modal-footer justify-content-between" >
    <button type="submit" class="btn btn-primary " name="salvar" id="salvar-turma">Salvar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
    <center id="r"><div id='retorno' class='btn btn-success'></div></center>
    </div>
    </form>
    </div>
    </div>
    
    </div>
    </div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/turma.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>


@stop