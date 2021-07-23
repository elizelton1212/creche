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
                <div id='dados'>
 <center> <img src='{{asset('img/logo1.png')}}' style='max-width: 150px'><br>Lista Funcionarios</center>

                <table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Genero</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Nacionalidade</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Iban</th>

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
                    
                      </tr>
                  @endforeach

                  </tbody>
                </table>
                {{$funcionarios->links()}}
</div>
<button type='button' onclick='funcao_pdf()'><i class ='fas fa-print'></i></button>
</div>
</div>
</div>
          
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src='{{asset('js/funcionario.js')}}'></script>

<script> 

function funcao_pdf() {
	
	var pegar_dados = document.getElementById('dados').innerHTML
	var janela = window.open('','','width=800,heigth=600')

	janela.document.write('<html><head>');
	janela.document.write('<title>PDF</title></head>');
	janela.document.write('<center>');

	janela.document.write(pegar_dados);
	janela.document.write('<hr>');

	janela.document.write('</center>');

	janela.document.write('</body></html>');

	janela.print();
}


</script>


           
@endsection