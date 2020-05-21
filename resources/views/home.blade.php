@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div><br>
                    @endif
                        
                    You are logged in!
                </div>
                <a href="{{ url('/mensaje') }}" class="btn btn-info btn-xs">
                        <span >Nuevo mensaje</span>
                     </a>
            </div>
        </div>
    </div>
</div>
@endsection
