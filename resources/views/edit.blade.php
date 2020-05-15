@extends('layouts.app')

@section('content')

    <h4 class="text-center">Editar Usuario: {{ $usuarios->name  }}</h4>

     <div class="card-body">
                     <form action="{{ route('modificar.update',$usuarios->id) }}" method="POST">

       					 @csrf

        				 @method('PUT')

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>

                        <div class="form-group row">
                             <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                             <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                            

                            

                                <select id="rol"  class="form-control" name="rol">

                                    <option>Jefe </option>
                                    <option>Profesor</option>
                    
                                </select>

                            </div>
                        </div>
                         <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
                     </form>
   
    
@endsection