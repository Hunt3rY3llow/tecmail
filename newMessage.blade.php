@extends('layouts.app')

@section('content')

<p>Mensaje nuevo</p>
<form method="post" action="{{ route('NuevoMensaje.store')}}">
   @csrf
  <div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">De:</label>

    <div class="col-md-6">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="emailO" value="{{auth()->user()->email}}" autofocus readonly="readonly">

      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
    <div id="destinos" class="col-md-12">
      <button type="button" onclick="myFunction()">Para:</button>
      
    </div>
  </div>

  <div class="col-md-4 col-form-label text-md-right">
    <label for="prioridad">Seleccione la prioridad del mesaje</label>
    <select name="prioridad" id="prioridad">
      <option>Informativo</option>
      <option >Normal</option>
      <option >Urgente</option>
    </select>
  </div>
  <div class="form-group row">
    <label for="mensaje" class="col-md-4 col-form-label text-md-right">Asunto:</label>

    <div class="col-md-6">

      <input id="mensaje" name="asunto" type="text" placeholder="Asunto del mensaje..." >
    </div>
  </div>
  <div class="col-md-4 col-form-label text-md-right">
    <textarea id="detalle" name="mensaje" rows="10" cols="90" placeholder="Escribe tu mensaje aqui..."></textarea>
  </div>

  <div class="form-group row">
   <label for="archivo" class="col-md-4 col-form-label text-md-right">Seleccionar archivo</label>

   <div class="col-md-6">

    <input id="archivo" type="file" multiple>
  </div>



 
  <button>Enviar</button>
</form>



<script>
function myFunction() {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "email");
  x.setAttribute("name", "email");
  x.setAttribute("required", "true");
  x.setAttribute("value", "");
  document.getElementById('destinos').appendChild(x);
}
</script>

@endsection
