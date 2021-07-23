@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados do candengue Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form method='post'>
   
   {!! csrf_field()!!}
<div class="input-group mb-3">
<input type='hidden' name='id' value='{{ $candengue->id}}'>
<label for="">Nome</label><br>
<input type="text" name='nome' class="form-control" id='nome' placeholder="Nome" value='{{$candengue->nome}}' >
</div>

<div class="input-group mb-3">
<label for="">idade</label><br>
<input type="date" name='idade' class="form-control" id='idade' placeholder="Idade" value='{{$candengue->idade}}' >
</div>

<div class="input-group mb-3">
<label for="">genero</label><br>
Masculino<input type="radio" name='genero' class="form-control" value='Masculino' >
Femenino<input type="radio" name='genero' class="form-control" value='Femenino' >
</div>

<div class="input-group mb-3">
<label for="">Restrição</label><br>
<input type="text" name='restricao' class="form-control" id='restricao' placeholder="Restrição" value='{{$candengue->restricao}}'>
</div>

<div class="input-group mb-3">
<label for="">Pai</label><br>
<input type="text" name='nomePai' class="form-control" id='nomePai' placeholder="Nome do Pai" value='{{$candengue->nomePai}}' >
</div>

<div class="input-group mb-3">
<label for="">Mãe</label><br>
<input type="text" name='nomeMae' class="form-control" id='nomeMae' placeholder="Nome da Mae" value='{{$candengue->nomeMae}}' >
</div>

<div class="input-group mb-3">
<label for="">Telefone do Pai</label><br>
<input type="text" name='telefonePai' class="form-control" id='nomePai' placeholder="Telefone do Pai" value='{{$candengue->telefonePai}}' >
</div>

<div class="input-group mb-3">
<label for="">Telefone Mae</label><br>
<input type="text" name='telefoneMae' class="form-control" id='telefoneMae' placeholder="Telefone Mae" value='{{$candengue->telefoneMae}}'>
</div>

<div class="input-group mb-3">
<label for="">Pessoa Alternativa</label><br>
<input type="text" name='pessoaAlternativa' class="form-control" id='pessoaAlternativa' placeholder="Nome da Pessoa Alternativa" value='{{$candengue->pessoaAlternativa}}'>
</div>

<div class="input-group mb-3">
<label for="">Telefone da Pessoa Alternativa</label><br>
<input type="text" name='contactoPessoaAlternativa' class="form-control" id='contactoPessoaAlternativa' placeholder="Contacto da Pessoa Alternativa" value='{{$candengue->contactoPessoaAlternativa}}'>
</div>




   
<div class='text-center'><button type="submit" id="alterarCandengue" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>
   
   </form>

   
   <script src="{{asset('js/jquery.min.js')}}"></script>
  
   <script src="{{asset('js/candengue.js')}}"></script>


@endsection