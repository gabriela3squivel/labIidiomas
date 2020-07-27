@extends('plantillaInfo')

@section('title')Información @endsection

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
<div class="container">
    <div class="row">
        <h1 style="margin-left:40%;">Información</h1>
    </div>

    <!-- Top navigation -->
    <div class="topnav">

        <!-- Centered link -->
        <div class="topnav-centered">
            <a href="#" class="topnav-item" onclick="openInfo(event,'Sitio')">Sobre este sitio</a>
        </div>

        <!-- Left-aligned links (default) -->
        <a href="#" class="topnav-item" onclick="openInfo(event,'Laboratorio')">Sobre el laboratorio</a>

        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="#" class="topnav-item" onclick="openInfo(event,'Plataforma')">Sobre la plataforma virtual</a>

        </div>

    </div>
</div>
<section id="Plataforma" class="tabcontent">
    <div class="row">
        <div class="col-md-6">
            Sobre esta plataforma
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut non exercitationem, quisquam nulla earum
                maiores fugiat, beatae, cumque rem ea consequuntur accusantium nobis quos debitis inventore aliquid
                molestiae voluptatem in?</p>

        </div>
        <div class="col-md-6">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut non exercitationem, quisquam nulla earum
                maiores fugiat, beatae, cumque rem ea consequuntur accusantium nobis quos debitis inventore aliquid
                molestiae voluptatem in?</p>

        </div>
    </div>
</section>

<section id="Laboratorio" class="tabcontent">
    <div class="row">
        <div class="col-md-6">
            Sobre esta laboraotrio
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut non exercitationem, quisquam nulla earum
                maiores fugiat, beatae, cumque rem ea consequuntur accusantium nobis quos debitis inventore aliquid
                molestiae voluptatem in?</p>

        </div>
        <div class="col-md-6">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut non exercitationem, quisquam nulla earum
                maiores fugiat, beatae, cumque rem ea consequuntur accusantium nobis quos debitis inventore aliquid
                molestiae voluptatem in?</p>

        </div>
    </div>
</section>
<section id="Sitio" class="tabcontent">
    <div class="row">
        <div class="col-md-6">
            Sobre esta sitio
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut non exercitationem, quisquam nulla earum
                maiores fugiat, beatae, cumque rem ea consequuntur accusantium nobis quos debitis inventore aliquid
                molestiae voluptatem in?</p>

        </div>
        <div class="col-md-6">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut non exercitationem, quisquam nulla earum
                maiores fugiat, beatae, cumque rem ea consequuntur accusantium nobis quos debitis inventore aliquid
                molestiae voluptatem in?</p>

        </div>
    </div>
</section>





@endsection