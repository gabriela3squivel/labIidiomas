@extends('plantillaInfo')


@section('titulo') Contacto @endsection
@section('menu')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('informacion')}}">Información</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Plataforma virtual
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('login') }}">Alumno</a>
            <a class="dropdown-item" href="{{ route('login') }}">Profesor</a>
        </div>
    </li>
</ul>


@endsection

@section('contenido')
<div class="container-fluid">
    <br>
    <br> <br>
    <div class="row">
        <h1 style="margin-left:40%">Contáctanos</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-signin" id="imgContacto">
                <div class="card-img-left  d-md-flex" id="cardImgContacto">
                    <!-- Background image for card set in CSS! -->

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h2>Escríbenos</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex animi mollitia reprehenderit soluta et
                culpa nostrum, eos minus, eum voluptate tempore dolorem voluptatibus sed vero deserunt! Sint, tenetur
                rem?

                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, est? Quo repellat reiciendis, non rem
                sapiente aliquam obcaecati odit natus veritatis sit iure pariatur nemo saepe doloribus vitae impedit
                commodi.

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tenetur facere nulla? Architecto,
                numquam suscipit! Dicta repellendus sed accusamus illo quod velit cupiditate reprehenderit porro,
                officiis quibusdam non laudantium amet.

            </p>
            <div class="row">
        <form action="POST" id="contactoFrm">
            @csrf
            <div class="form-group">
                <div class="row">

                    <div class="col-md-4">
                        <label for="nombre">Nombre completo: </label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Tu nombre completo" id="nombre" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="a">Asunto:</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Asunto del correo" id="asunto" required>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>Descripción del correo: </label>
                    </div>

                    <div class="col-md-5">
                        <textarea id="w3review" name="w3review" rows="4" cols="50" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left:50%">Enviar correo</button>
        </form>
        <br>
    </div>
        </div>
    </div>
   <br>
</div>

@endsection