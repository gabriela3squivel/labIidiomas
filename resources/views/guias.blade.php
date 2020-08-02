@extends('plantillaInfo')
<link href="{{ asset('css/guias.css') }}" rel="stylesheet">


@section('titulo')Guias, {{auth()->user()->name}} @endsection
@section('menu')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('perfil')}}">Perfil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Guías
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Classroom</a>
            <a class="dropdown-item" href="#">Meet</a>
            <a class="dropdown-item" href="#">Material para trabajo</a>
            <a class="dropdown-item" href="#">Cuestionarios</a>
            <a class="dropdown-item" href="#">Gamificación</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('foro')}}">Foro</a>
    </li>
    <!-- Right-aligned links -->
    <li class="nav-item topnav-right" style="position:inline">
        <form method="POST" action="{{ route('logout')}}">
            {{csrf_field()}}
            <button class="button btn btn-danger">Cerrar Sesión</button>
        </form>
    </li>
</ul>
@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @if(auth()->user()->tipo==0)
            <h2>Guias para alumno/a, {{auth()->user()->name}}!</h2>

            @else
            <h2> Guias recomendadas para ti {{auth()->user()->name}}</h2>
            @endif
        </div>
        <br>
    </div>
    <!--
    |-------------------------------------------------------------------------------------|
    |                                Guía de classroom                                    |
    |-------------------------------------------------------------------------------------|
    -->
    <div class="jumbotron">
        <h1 class="display-4">Classroom</h1>
        <p class="lead">¿Qué es?</p>

        <p class="lead">Esta una herramienta de Google que permite gestionar clases online, y puede utilizarse tanto
            para el aprendizaje presencial, también para el aprendizaje 100% a distancia, o incluso para el aprendizaje
            mixto.</p>

        <p class="lead">Es una herramienta que pueden utilizarla tanto profesores como los alumnos y podrán acceder
            desde cualquier dispositivo a sus clases, sus apuntes o sus tareas asignadas.</p>

        <p class="lead">A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</p>

        <iframe width="500" height="300" src="https://www.youtube.com/embed/nYuDKbn9i_w" " frameborder=" 0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="margin=0;pading=0;">
        </iframe>
    </div>
    <!--
    |-------------------------------------------------------------------------------------|
    |                                Guía de meet                                         |
    |-------------------------------------------------------------------------------------|
    -->
    <div class="jumbotron">
        <h1 class="display-4">Meet</h1>
        <p class="lead">¿Qué es?</p>

        <p class="lead">Esta una herramienta de Google que permite realizar videoconferencias sencillas y confiables,
            permite la participación de hasta 250 miembros, ademas, permite grabar las videoconferencias y guardarlas en
            Google Drive. También te permite compartir pantalla con los demás miembros para tener presentaciones
            rápidas.</p>


        <p class="lead">A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</p>

        <iframe width="500" height="300" src="https://www.youtube.com/embed/h4Fgds-ZxqQ" " frameborder=" 0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="margin=0;pading=0;">
        </iframe>
    </div>
    <!--
    |-------------------------------------------------------------------------------------|
    |                            Guía de material de trabajo                              |
    |-------------------------------------------------------------------------------------|
    -->
    <div class="jumbotron">
        <h1 class="display-4">Material de trabajo</h1>

        <p class="lead">En esta sección se presentan diferentes herramientas para trabajar como son:</p>

        <h1>Google drive</h1>
        <p class="lead">Es una herramienta que te permite almacenar y compartir contenido, ademas puedes acceder desde
            cualquier dispositivo. Puedes tener unidades compartidas así como una unidad privada.</p>


        <h5>A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</h5>

        <iframe width="500" height="300" src="https://www.youtube.com/embed/G1qMhesHagk" " frameborder=" 0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="margin=0;pading=0;">
        </iframe>

        <h1>Google Docs</h1>
        <p class="lead">Es una herramienta que sirve como un sencillo procesador de texto que permite la creación y
            edición de documentos, los cuales son almacenados en la nube, por ello solo se tiene acceso a través de
            Internet. </p>

        <p class="lead">Ademas, puedes compartir tus documentos con otros usuarios y darles permisos de edición o solo
            lectura. Una de sus ventajas es que no necesitas instalar nada y los archivos así como sus modificaciones se
            guardan automáticamente. Es excelente para el trabajo en grupo.</p>

        <h5>A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</h5>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/2ZHf9JrG-sE" " frameborder=" 0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="margin=0;pading=0;">
        </iframe>
    </div>
    <!--
    |-------------------------------------------------------------------------------------|
    |                               Guía de cuestionarios                                 |
    |-------------------------------------------------------------------------------------|
    -->

    <div class="jumbotron">
        <h1 class="display-4">Cuestionarios</h1>

        <p class="lead">En esta sección se presentan diferentes herramientas para trabajar como son:</p>

        <h1>Google forms</h1>
        <p class="lead">Es una herramienta que se puede utilizar para crear tus propios sondeos, recopilar la
            información que desees de tus contactos a través de las respuestas que vayas recibiendo de los formularios
            que envíes, en definitiva establece una conexión directa con el destinatario y plasmando la información en
            una hoja de cálculo para que puedas analizar los resultados.</p>


        <h5>A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</h5>

        <iframe width="500" height="300" src="https://www.youtube.com/embed/RS6V45lq-Zw
        " frameborder=" 0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen style="margin=0;pading=0;">
        </iframe>

        <h1>Kahoot</h1>
        <p class="lead">Es una herramienta que te permite crear un juego de preguntas y respuestas en clase de manera
            dinámica y muy simple de usar, ideal para evaluar el progreso de los alumnos y mantener su ánimo arriba.</p>

        <h5>A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</h5>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/pANtMqNWBek" " frameborder=" 0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="margin=0;pading=0;">
        </iframe>
    </div>
    <!--
    |-------------------------------------------------------------------------------------|
    |                                Guía de gamificación                                 |
    |-------------------------------------------------------------------------------------|
    -->

    <div class="jumbotron">
        <h1 class="display-4">Gamificación</h1>

        <p class="lead">En esta sección se presentan diferentes herramientas para trabajar como son:</p>

        <h1>EducaPlay</h1>
        <p class="lead">Es una herramienta que es una plataforma para la creación de actividades educativas multimedia
            que nos permite crear aplicaciones de diversos tipos como son mapas, herramientas para hacer tests,
            adivinanzas, aplicaciones de dictado, crucigramas los cuales pueden ser personalizados para adecuarse a
            nuestras necesidades.</p>


        <h5>A continuación le dejamos un video que facilitará su aprendizaje sobre esta herramienta</h5>

        <iframe width="500" height="300" src="https://www.youtube.com/embed/7tu8I28WYko" " frameborder=" 0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="margin=0;pading=0;">
        </iframe>
    </div>

</div>
@endsection