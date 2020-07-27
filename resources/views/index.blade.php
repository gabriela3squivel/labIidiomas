@extends('plantillaInfo')

@section('title') Laboratorio Idiomas @endsection

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

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('{{asset('imags/slide5.jpg')}}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Aprender idiomas</h3>
                    <p class="lead">nunca fue más sencillo.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{asset('imags/slide6.jpg')}}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Learning languages </h3>
                    <p class="lead">was NEVER easier.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('{{asset('imags/slide4.jpg')}}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">L'apprentissage des langues</h3>
                    <p class="lead">n'a jamais été aussi simple</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav nav navbar-nav navbar-center" id="navbarNav">
            <li class="nav-item">
                <a class="nav-link" href="#Nosotros" style="color:black;">Nosotros <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#QuienesSomos" style="color:black;">Quiénes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Cursos" style="color:black;"> Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Noticias" style="color:black;">Noticias</a>
            </li>
        </ul>
    </div>
</nav>

<div class="rect" id="green">
    <section id="Nosotros">
        <h1>Nosotros</h1>
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat obcaecati, assumenda fugit
                deleniti perspiciatis numquam nihil aliquid, possimus, porro debitis delectus dignissimos. Eum
                repudiandae perferendis voluptas distinctio omnis ratione vel.
            </div>
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa officiis ipsum, qui cumque facere
                ipsam repudiandae animi eos accusantium, doloribus distinctio deleniti reiciendis eius soluta neque
                sunt quisquam expedita necessitatibus.
            </div>
        </div>
    </section>
</div>

<div class="rect" id="blue">
    <section id="QuienesSomos">
        <h1>¿Quiénes somos?</h1>
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis tempora voluptatibus provident
                unde, error ratione iusto nihil neque qui sed ipsa fuga. Fugiat porro adipisci tempore cum laborum
                sed nobis.
            </div>
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi impedit, veniam in perspiciatis nulla
                alias eos omnis quod velit sint harum? Odit laboriosam sed, at accusantium esse impedit ducimus hic?
            </div>
        </div>
    </section>

</div>
<div class="rect" id="red">
    <section id="Cursos">
        <h1>Cursos</h1>
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam fugit expedita numquam assumenda
                iusto nesciunt illo possimus autem, similique sit aspernatur harum quos eius provident neque illum
                delectus dicta laboriosam.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis consequatur temporibus sequi ab
                recusandae amet, quas ipsum ex, voluptatum ratione quibusdam explicabo. Inventore in unde
                accusantium ad neque quo quam?
            </div>
            <div class="col-md-6">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio debitis ipsum ipsam! Fugit excepturi,
                deserunt repellendus non ut adipisci hic quaerat, odio, omnis pariatur officia accusamus expedita
                atque nostrum blanditiis?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia obcaecati, et distinctio saepe a
                totam quo quae! Ad hic repellat minima sit illo explicabo, deleniti voluptatum quo sunt debitis aut?
            </div>
        </div>
    </section>
</div>
<div class="rect" id="blue">
    <section id="Noticias">
        <h1>Noticias</h1>
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, ratione culpa. Alias ipsum
                officiis, nobis sunt, itaque neque expedita, tempore nesciunt iure ut repellendus cum voluptatem
                consequuntur? Quisquam, nostrum rem.
            </div>
            <div class="col-md-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quod repudiandae modi nesciunt,
                maxime saepe, alias aliquam, architecto et porro accusamus fugiat expedita animi odio eum
                reprehenderit inventore dolores numquam.
            </div>
        </div>
    </section>
</div>


@endsection