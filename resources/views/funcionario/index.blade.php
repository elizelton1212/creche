@extends('adminlte::page')

@section('title', 'CaNdengue')

@section('content_header')
@stop
@section('content')

<div class="box">

    <div class="box-header">
    Funcionarios
 </div>
<div class="box-body">
  <div id="teste">
    <div class="modal fade"  id="modal-funcionario" > 
    <div class="modal-dialog">
    <div class="modal-content background-primary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Funcionario</h4>
    </div>
    <div class="modal-body">
      <div class="card card-primary">
        <center> <div id="retornoFornecedor"></div></center>
      <form id="formulario-Fornecedor" method='POST'>
        {!! csrf_field()!!}

        <div class="card-body">
      <div class="form-group">
       <input type="txt" class="input-group input-group-lg mb-3" name='nome'id="nome" placeholder="Insira o seu Nome"><div id='alertnome'>
                              </div>                   
                          </div>
                          <div class="form-group">
                            <label for="genero">Genero</label><br>
                           Masculino <input type="radio" name="genero" id="generoM" value="Masculino">
                           Femenino  <input type="radio" name="genero" id="generoF" value='Femenino'>
                            <br><br>
                            <label for="">Estado Civil</label><br>
                            Casado(a) <input type="radio" name="estadoCivil" id="casado" value="Casado(a)">
                            Solteiro(a)<input type="radio" name="estadoCivil" id="solteiro" value='Solteiro(a)'>

                            </div>
                          </div>
                          <div class="form-group">
                          <label>Função</label>
                          <select id='funcao' name='role'>
                          <option value=''></option>
                          @foreach ($roles as $r )
                          <option value='{{ $r->id }}'>{{ $r->name }}</option>
                              
                          @endforeach
                          </select>
                            <input type="text" name="nbi" id="nbi" placeholder="Numero do BI">
                            <input type="text" name="inss" id="inss" placeholder="Inss">

                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nacionalidade</label>
                           <select class='input-group input-group-lg mb-3' name="nacionalidade" id="nacionalidade">
                           <option value="Angola">Angola</option>
                           <option value="Africa do Sul">Africa do Sul</option>
                           <option value="Brazil">Brazil</option>
                           <option value="Portugal">Portugal</option>
                           </select><div id='alertnacionalidade'></div>
                          </div>
                          <div class="form-group">

<input type="tel" name="iban" id="iban"  placeholder="IBAn">
<input type="number"  name="salarioLiquido" id="salarioLiquido" placeholder="Salario Liquido" >
<input type="number"  name="salarioBruto" id="salarioBruto" placeholder="Salario Bruto" >
 <input type="number" name="salarioBase" id="salarioBase" placeholder="Salario Base" >
<input type="number"  name='bonus' id="bonus" placeholder="Bonus" >
<input type="text"    name="telefone" id="telefone" placeholder="Telefone" >
                          
                          </div>
                        </div>
                        
                        <div class="form-group">
                          
                          <input type="text" name="name" id="name"  placeholder="Nome de Utilizador">
                          
                          <input type="email" name="email" id="email" placeholder="Email@">

                          <input type="password" name="password" id="password" placeholder="Password">

                        </div>
                        <!-- /.card-body -->
        
                    </div>
                            
        <div class="modal-footer justify-content-between" >
        <button type="submit" class="btn btn-primary" name="salvar" id="salvar-funcionario">Salvar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <center id="r"></center>
        
        
        
        </div>
        </form>
        </div>
        </div>
        
        </div>
        </div>
            


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
                <form action='{{ url('consultaFuncionario') }}' method='post'>
              @csrf
              <input type='text' name='estudante' placeholder='Procurar' required>
              <button type='submit' class='btn-dark'><i class='fas fa-search'></i></button>
              </form>
@csrf

                <table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Genero</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Nacionalidade</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Iban</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ação a Efectuar</th>
                  <th class="text-center" width="150px">
                  <button class="btn btn-primary" id="cadastraFucionario"  data-toggle="modal" data-target="#modal-funcionario">
                  <Strong>Cadastrar</i></strong>
                  </th>
                  </tr>
                  </thead>
                  <tbody>      
                  @foreach ($funcionarios as $f)
                      <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->nome}}</td>
                   <td>{{$f->genero}}</td>
                    <td>{{$f->nacionalidade}}</td>
                    <td>{{$f->iban}}</td>
                    <td>
<a href="{{url("funcionario/$f->id")}}"> <button class='btn btn-info'><i class='fas fa-eye'> </i></button></a>
<a href="{{url("funcionario/$f->id/edit")}}"> <button class='btn btn-primary'><i class="fas fa-edit"></i></button></a>
@can('cadastrar_funcionario')
<a  class="js-del" href="{{url("funcionario/$f->id")}}" class='js-del'>
 <button class='btn btn-danger'><i class="fas fa-trash"></i></button></a>
  
@endcan

                    </td>
                      </tr>
                  @endforeach

                  </tbody>
                </table>
                {{$funcionarios->links()}}
</div>
<a href='{{ url('imprimirFuncionario') }}'><i class ='fas fa-print'></i></a>
</div>
</div>
</div>
          
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src='{{asset('js/funcionario.js')}}'>
           
@endsection