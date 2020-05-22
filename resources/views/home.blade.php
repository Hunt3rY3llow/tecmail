@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bandeja de Mensajes</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div><br>
                    @endif
                    <div>
                        <table class="table table-dark">
                        <tr>
                            <th>Remitente</th>
                            <th>Asunto</th>
                            <th>Prioridad</th>
                        </tr>
                         @forelse($mensajes as $mensajesItem)
                        <tr>
                            <td>{{$mensajesItem->co}}</td>
                            <td>{{$mensajesItem->asunto}}</td>
                            <td>{{$mensajesItem->prioridad}}</td>
                        @empty
                            <h1>Nada para mostrar</h1>
                        </tr>
                        @endforelse    
                    </div>
                    </table>
                        
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
