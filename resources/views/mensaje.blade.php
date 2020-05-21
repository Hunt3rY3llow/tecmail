@extends('layouts.app')

@section('content')
<html>
<body>

<p>Mensaje nuevo</p>
                            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">De:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                 <div class="form-group row">
                  <div id="destinos" class="col-md-12">
                <button onclick="myFunction()">Para:</button>
                </div>
                  </div>
                          <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label text-md-right">Asunto:</label>

                            <div class="col-md-6">

                                <input id="mensaje" type="text">
                            </div>
                          </div>
          <div class="form-group row">
                          <textarea id="detalle" rows="10" cols="90"></textarea>
                          </div>

                          <div class="form-group row">
                           <label for="archivo" class="col-md-4 col-form-label text-md-right">Seleccionar archivo</label>

                            <div class="col-md-6">

                                <input id="archivo" type="file" multiple>
                          </div>



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

</body>
</html>

@endsection
