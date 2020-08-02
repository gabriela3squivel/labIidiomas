@extends('home')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<link href="{{ asset('css/foro.css') }}" rel="stylesheet">
<script href="{{ asset('js/efectos.js') }}" rel="stylesheet"></script>

@section('contenido')

<br>
<br>
<div class="container-fluid gedf-wrapper mt-5">
    <div class="row justify-content-center">
        <!---BUSQUEDA-->
        <div class="col-md-3 mt-4">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="h6">Buscar contenido</div>
                    </li>
                    <li class="list-group-item">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="button" id="button-addon2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--SECCION DE PUBLICACION-->
        <div class="col-md-6 gedf-main mt-4">
            @if(auth()->user()->tipo==1)
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card gedf-card">
                <div class="card-header ">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                                aria-controls="posts" aria-selected="true">Nuevo</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            <form method="POST" action="{{route('new.post')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="sr-only" for="tema"></label>
                                    <input type="text" name="tema" placeholder="Tema de la clase" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="message"></label>
                                    <textarea class="form-control" name="descripcion" rows="3"
                                        placeholder="¿De qué trata tu contenido?" max="400"></textarea>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-6 mt-2">
                                        <input type="radio" name="carga" value="enlace" id="enlace"
                                            onclick="tipoCarga()"> Enlace
                                        <input type="radio" name="carga" value="archivo" id="archivo"
                                            onclick="tipoCarga()"> Archivo

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="categoriasSelect">Categoría: </label>
                                        <select class="form-control" id="categoriasSelect" name="categoria" required>
                                            <option>Grammar</option>
                                            <option>Listening</option>
                                            <option>Reading</option>
                                            <option>Speaking</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="cargarArchivo">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile"
                                            name="nombreArchivo1">
                                        <label class="custom-file-label" for="customFile">Cargar</label>
                                    </div>

                                </div>
                                <div class="form-group" id="cargarEnlace">

                                    <label for="">Enlace al contenido:</label>
                                    <input type="text" class="form-control" name="nombreArchivo2" id="inputEnlace"
                                        placeholder="Pegue aquí su enlace">

                                </div>
                        </div>
                    </div>
                    <div class="btn-toolbar justify-content-end">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">Publicar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            @endif

            @foreach($posts as $post)
            <!---PUBLICACION-->
            <div class="card gedf-card mt-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="45" src="" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0"> {{$post->fromProfesor->isUser->name}} {{$post->fromProfesor->isUser->ap_paterno}}</div>
                                <div class="h7 text-muted">Profesor</div>
                            </div>
                        </div>
                        <div>
                            <!--
                                <div class="dropdown"><button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button><div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1"><div class="h6 dropdown-header">Configuracion</div><a class="dropdown-item" href="#">Editar</a><a class="dropdown-item" href="#">Eliminar</a></div></div> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="ml-2">
                        <div class="h5 m-0"> Tema: {{$post->tema}}</div>
                        <div class="h7 text-muted">{{$post->descripcion}}</div>
                        <div class="h7 text-muted">Material: {{$post->nombreArchivo}}</div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>
<br>
<br>
<br>
<br>
@endsection