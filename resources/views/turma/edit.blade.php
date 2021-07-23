@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados da Atividade Selecionada</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form method='post'>
   
   {!! csrf_field()!!}
   
<input type='hidden' name='id' value='{{ $turmas->id }}'>
<div class="input-group mb-3">
<label for="">Preço</label><br>
<input type="text" name='descricao' class="form-control" id='descricao' placeholder="Descricao" value='{{$turmas->descricao}}' >

</div>








   
<div class='text-center'><button type="submit" id="alterarDados" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>
   
   </form>

   
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/messages_pt_PT.js')}}"></script>
   <script src="{{asset('js/turma.js')}}"></script>


@endsection