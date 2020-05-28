    <!----------VER MENSAJE---------->
    @extends('layouts.app')

    @section('content')

    @if($mensaje)

    <!--Contenedores principales de ver mensaje-->
    <div class="contenedor_escribir">

        <div class="ver_mensaje">

            <!--Formulario que muestra el mensaje-->


                <div class="titulo">Semana de sistemas</div>

                    <!--Area superior donde van los datos del mensaje-->
                    <div class="nm_head">
                        <div class="datos_head2" >De: {{$mensaje['co']}}</div>
                        <div class="datos_head2" >Asunto: {{$mensaje['asunto']}}</div>
                        <div class="datos_head2" >Prioridad: {{$mensaje['prioridad']}}</div>
                    </div>

                    <!--Area donde va el contenido del mensaje-->
                    <textarea id="area_mensaje2" disabled>{{$mensaje['mensaje']}}</textarea>
                    
                    <!--Area de botones del form-->
                    <div class="nm_botones">
                        <a href="{{route('Mensaje.edit',$mensaje['id'])}}">
                            <button id="b_subm" type="button">Responder</button>
                        </a>
                        
                        <a href="{{route('Mensaje.destroy',$mensaje['id'])}}">
                            <button id="b_subm" type="button">Eliminar</button>
                        </a>
                </div>



        </div>

    @endif

    @endsection