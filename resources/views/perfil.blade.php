@extends('plantillaInfo')

@section('titulo')Perfil, {{auth()->user()->name}} @endsection
@section('menu')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">Guías</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">Foro</a>
    </li>
    <!-- Right-aligned links -->
    <li class="nav-item topnav-right" style="position:inline">
        <a href="#" class="nav-link">Cerrar sesión</a>
    </li>
</ul>
@endsection

@section('contenido')

<section id="bg-header">
    <div class="row">
        <div class="col-md-10" id="portada">
            <div class="col-md-3" id="fotoperfil">

            </div>
            <div class="row" id="datospersonales">

            </div>
        </div>
    </div>
</section>

@endsection