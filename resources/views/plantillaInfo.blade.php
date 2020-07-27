<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>@yield('titulo')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/info.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JS for style-->
    <script src="{{asset('js/efectos.js')}}"></script>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
        <a class="navbar-brand" href="#">i-Learn</a>
        @yield('menu')

    </nav>
    @yield('contenido')


</body>
<footer>
    <div class="row">
        <div class="col-md-4">
            <b>Información sobre i-Learn</b>
            <br>
            Para obtener mayor información sobre el laboratorio de idiomas puede comunicarse al
            <br>
            Tél. (---) 1234567
            <br>
            Email: vgarcia@upemor.edu.mx
        </div>
        <div class="col-md-4">
            <b>Ubicación y redes sociales</b>
            <br>
            Boulevard Cuauhnáhuac #566, Col. Lomas del Texcal, Jiutepec, Morelos. CP 62550
            <br> <br>
            <div class="row">
                <i class="fa fa-facebook"></i>
            </div>
            <div class="row">
                <i class="fa fa-instagram"></i>
            </div>
        </div>
        <div class="col-md-4">
            <b>Información de contacto con los desarrolladores</b>
            <br>
            Para más información sobre el desarrollo de sitios web
            comúniquese a: equipo2@gmail.com
        </div>
    </div>
</footer>

</html>