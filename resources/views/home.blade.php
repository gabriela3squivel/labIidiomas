@extends('plantillaInfo')
<!-- Styles -->
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link href="{{ asset('css/foro.css') }}" rel="stylesheet">
@section('menu')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('perfil')}}">Perfil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">Guías</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">Foro</a>
    </li>
    <!-- Right-aligned links -->
    <li class="nav-item topnav-right" style="position:inline">
        <a href="" class="nav-link">Cerrar sesión</a>
    </li>
</ul>
@endsection

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @if(auth()->user()->tipo==0)
            <h2>¡Bienvenido alumno/a, {{auth()->user()->name}}!</h2>

            @else
            <h2> Bienvenido profesor/a, {{auth()->user()->name}}</h2>
            @endif
        </div>
        <br>
    </div>
    <!--
            
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> -->

    <div class="row">
        <h3>Guías audiovisuales</h3>
        <div class="videos">
            <div class="row">
                <div class="col-md-4" id="video">
                    <iframe width="300" height="300" src="https://www.youtube.com/embed/hjQfYEjvJeU" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                        style="margin=0;pading=0;"></iframe>
                </div>
                <div class="col-md-4" id="video">
                    <iframe width="300" height="300" src="https://www.youtube.com/embed/uAVUl0cAKpo"" frameborder=" 0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                        style="margin=0;pading=0;"></iframe>
                </div>
                <div class="col-md-4" id="video">
                    <iframe width="300" height="300" src="https://www.youtube.com/embed/FuXNumBwDOM" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

            </div>

        </div>
        <br>
    </div>
    <div class="row justify-content-center">
        <div class="row">
            <br>
            <p align="center">Puedes consultar todas las guías disponibles <a href=""> aquí</a></p>
        </div>

    </div>


    <div class="row">
        <section id="ultimoForo">
            <h3>Últimas novedades en el foro</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <section class="post-heading">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object photo-profile"
                                                        src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g"
                                                        width="40" height="40" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="anchor-username">
                                                    <h4 class="media-heading">Gregsam Cabañas</h4>
                                                </a>
                                                <a href="#" class="anchor-time">51 mins</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    </div>
                                </div>
                            </section>
                            <section class="post-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    turpis sem, dictum id bibendum eget, malesuada ut massa. Ut scel
                                    erisque nulla sed luctus dapibus. Nulla sit amet mi vitae purus sol
                                    licitudin venenatis. Praesent et sem urna. Integer vitae lectus nis
                                    l. Fusce sapien ante, tristique efficitur lorem et, laoreet ornare lib
                                    ero. Nam fringilla leo orci. Vivamus semper quam nunc, sed ornare magna dignissim
                                    sed.
                                    Etiam
                                    interdum justo quis risus
                                    efficitur dictum. Nunc ut pulvinar quam. N
                                    unc mollis, est a dapibus dignissim, eros elit tempor diam, eu tempus quam felis eu
                                    velit.
                                </p>
                            </section>
                            <section class="post-footer">
                                <hr>
                                <div class="post-footer-option container">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Comment</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                                    </ul>
                                </div>
                                <!-- Comments 
                            <div class="post-footer-comment-wrapper">
                                <div class="comment-form">

                                </div>
                                
                                <div class="comment">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object photo-profile"
                                                    src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g"
                                                    width="32" height="32" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="anchor-username">
                                                <h5 class="media-heading">Media heading</h5>
                                            </a>
                                            <a href="#" class="anchor-time">51 mins</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>-->
                            </section>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <section class="post-heading">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object photo-profile"
                                                        src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g"
                                                        width="40" height="40" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#" class="anchor-username">
                                                    <h4 class="media-heading">Gregsam Cabañas</h4>
                                                </a>
                                                <a href="#" class="anchor-time">51 mins</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                    </div>
                                </div>
                            </section>
                            <section class="post-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                    turpis sem, dictum id bibendum eget, malesuada ut massa. Ut scel
                                    erisque nulla sed luctus dapibus. Nulla sit amet mi vitae purus sol
                                    licitudin venenatis. Praesent et sem urna. Integer vitae lectus nis
                                    l. Fusce sapien ante, tristique efficitur lorem et, laoreet ornare lib
                                    ero. Nam fringilla leo orci. Vivamus semper quam nunc, sed ornare magna dignissim
                                    sed.
                                    Etiam
                                    interdum justo quis risus
                                    efficitur dictum. Nunc ut pulvinar quam. N
                                    unc mollis, est a dapibus dignissim, eros elit tempor diam, eu tempus quam felis eu
                                    velit.
                                </p>
                            </section>
                            <section class="post-footer">
                                <hr>
                                <div class="post-footer-option container">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Comment</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                                    </ul>
                                </div>
                                <!-- Comments 
                            <div class="post-footer-comment-wrapper">
                                <div class="comment-form">

                                </div>
                                
                                <div class="comment">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object photo-profile"
                                                    src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g"
                                                    width="32" height="32" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" class="anchor-username">
                                                <h5 class="media-heading">Media heading</h5>
                                            </a>
                                            <a href="#" class="anchor-time">51 mins</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>-->
                            </section>
                        </div>
                    </div>
                </div>


            </div>

        </section>
    </div>
</div>

@endsection