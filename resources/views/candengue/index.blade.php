@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')

@stop

@section('content')


<div class="box">
    
    <div class="box-header">
Candengue
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
<form action='{{ url('consultarCandengue') }}' method='post'>
              @csrf
              <input type='text' name='candengue' placeholder='Procurar' required>
              <button type='submit' class='btn-dark'><i class='fas fa-search'></i></button>
              </form>
@csrf
<table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">idade</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Restrição</th>







<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ações a Executar</th>
<th class="text-center" width="150px">
<button class="btn btn-primary" id="cadastraCategoria"  data-toggle="modal" data-target="#modal-candengue">
<Strong>Cadastrar</i></strong>
</th>
</tr>
</thead>
<tbody>
@foreach ($candengues as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->nome}}</td>
<td>{{$c->idade}}</td>
<td>{{$c->restricao}}</td>

<td>

    <a href="{{url("candengue/$c->id")}}" class='show-modal btn btn-info btn-sm'>
        <i class="fas fa-eye"></i>
        </a>
        <a href="{{url("candengue/$c->id/edit")}}" class="edit-modal btn btn-warning btn-sm">
        <i class="fas fa-pencil-alt"></i>
        </a>
     @can('cadastrar_funcionario')
       <a href="{{url("candengue/$c->id")}}" codigo ='4'class="js-del">
      <button class='btn-danger'><i class="fas fa-trash"></i></button>
       </a>

     @endcan
       
</td>







</tr>



    
@endforeach



</tbody>
</table>  
{{ $candengues->links() }}    
</div>

<a href='{{ url('imprimirCandengue') }}'><i class ='fas fa-print'></i></a>

</div>
</div>
</div>
            </div>
<div class="modal fade"  id="modal-candengue" > 
    <div class="modal-dialog">
    <div class="modal-content background-primary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Candengue</h4>
    </div>
    <div class="modal-body">
    
    
    
        
                 
    
                
    <div class="card card-primary">
    <center> <div id="retornoFornecedor"></div></center>
    <form id="formulario-Fornecedor" action='cadastrarCandengue' method='POST' enctype='multipart/form-data'>
                            {!! csrf_field()!!}
                            <div class="card-body">
 <div class="form-group">
 <input type="txt" class="required" name='nome'id="nome" placeholder="Nome" required>
 <input type="number" class="required" name='idade'id="idade" placeholder='Idade' required><br>
 <Label>D.Nascimento</Label><input type='date' name ='dataNascimento' required>
<input type="text" name="restricao" id="restricao" placeholder="Restrição" required>  
</div>
   <div class="form-group">
   <label for="exampleInputEmail1">Genero</label>
   M<input type="radio" name="genero" id="Masculino" value="Masculino">
   F<input type="radio" name="genero" id="Femenino" value="Femenino">
   </div>

  <div class="form-group">
  <input type="text" class="required" name='nomePai' id="nomePai" placeholder="Nome do Pai" required>
  <input type="text" name="nomeMae" id="nomeMae" id="Nome da Mãe"  placeholder="Nome da Mãe" required>
  </div>
                
    
  <div class="form-group">
    <input type="tel" name='telefonePai' id="telefonePai" placeholder="Nº Telefone do Pai" required>
    <input type="tel" name="telefoneMae" id="telefoneMae"  placeholder="Nº Telefone da Mãe" required>
    <input type="text" name="pa" id="pa"  placeholder="Pessoa alternativa" required>
    <input type="tel" name="telefonePa" id="telefonePa" placeholder="Nº Telefone Pessoa Alternativa" required>
    <input type='file' name='imagem' id ='imagem'>
    <label>Turma</lable>
    <select name='turma' required>
    <option value=''>------------------</option>
    @foreach ($turmas as $t )
    <option value='{{ $t->id }}'>{{ $t->descricao }}</option>        
    @endforeach

    </select>
    
    </div>
    
    <div class="modal-footer justify-content-between" >
    <button type="submit" class="btn btn-primary " name="salvar" id="salvar-candengue">Salvar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
    <center id="r"><div id='retorno' class='btn btn-success'></div></center>
    
    
    
    </div>
    </form>
    </div>
    </div>
    
    </div>
    </div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/candengue.js')}}"></script>



@stop