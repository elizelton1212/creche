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
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Genero</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Nacionalidade</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Iban</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ação a Efectuar</th>
                  
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
<a  class="js-del" href="{{url("funcionario/$f->id")}}"> <button class='btn btn-danger'><i class="fas fa-trash"></i></button></a>

                    </td>
                      </tr>
                  @endforeach

                  </tbody>
                </table>
               

<link src='{{ asset('js/jquery-ui.css') }}'> 
                
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('js/funcionario.js')}}"></script>

           
@endsection