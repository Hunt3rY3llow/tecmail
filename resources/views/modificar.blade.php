@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($usuarios as $pastel)
          <table class="table table-dark">
                        <thead>
                            <tr>
                             <th scope="col">#</th>
                             <th scope="col">Nombre</th>
                             <th scope="col">Correo</th>
                             <th scope="col">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >{{ $pastel->id }}</td>
                                <td class="text-center">{{ $pastel->name }}</td>
                                <td class="text-center">{{ $pastel->email }}</td>
                                <td class="text-center">{{ $pastel->rol }}</td>
                                <td class="text-center">
                                 <form action="{{ route('modificar.destroy', $pastel->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-info btn-xs" type="submit">Delete</button>
                </form>

            </td>
            <td>

                <a href="{{ url('/modificar/'.$pastel->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span >Modificar</span>
                </a>
            </td>

                                 
        
                            </tr>
                        </tbody>
                    </table>
                      

            
            

    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
