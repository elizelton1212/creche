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
<div class="input-group mb-3">
<input type='hidden' name='id' value='{{ $atividade->id}}'>
<label for="">Nome</label><br>
<input type="text" name='descricao' class="form-control" id='descricao' placeholder="Descricao" value='{{$atividade->descricao}}' >

</div>
<div class="input-group mb-3">
<label for="">Preço</label><br>
<input type="text" name='valor' class="form-control" id='valor' placeholder="Descricao" value='{{$atividade->valor}}' >

</div>








   
<div class='text-center'><button type="submit" id="salvaratividade" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>
   
   </form>

   
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/messages_pt_PT.js')}}"></script>
   <script src="{{asset('js/atividade.js')}}"></script>


@endsection