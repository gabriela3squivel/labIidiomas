@extends('plantillaInfo')
<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">


@section('titulo')Perfil, {{auth()->user()->name}} @endsection
@section('menu')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('guias')}}">Guías</a>
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

<section id="bg-header">
    <div class="row">
        <div class="col-md-12" id="portada">
            <div class="row">
                <div class="col-md-2" id="fotoperfil">

                </div>
                <div class="col-md-10" id="datospersonales">
                    <br>
                    <h2>Datos personales
                        <span id="iconUser" onclick="editProfileInfo()">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" />
                                <path fill-rule="evenodd"
                                    d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z" />
                            </svg>
                        </span>
                    </h2>
                    <div id="info-personal">
                        <label for="">Nombre: {{ auth()->user()->name }}</label>
                        <label for="">Apellidos: {{ auth()->user()->ap_paterno }} {{auth()->user()->ap_materno}}</label>
                        <label for="">Email: {{auth()->user()->email }}</label>
                        <br>
                        @if(auth()->user()->tipo==1)
                        <label for="">Rol: Maestro</label>
                        @else
                        <label for="">Rol: Estudiante</label>
                        @endif

                    </div>
                    <form class="form-inline" action="{{route('update.user')}}" method="POST" id="formProfile">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <label for="name" class="col-md-1">Nombre:</label>
                            <input type="text" class="form-control campos col-md-2" value="{{auth()->user()->name}}"
                                name="name" required>
                            <label for="paterno" class="col-md-1">Apellido paterno:</label>
                            <input type="text" class="form-control campos col-md-2"
                                value="{{auth()->user()->ap_paterno}}" name="paterno" required>
                            <label for="materno" class="col-md-1">Apellido materno:</label>
                            <input type="text" class="form-control campos col-md-2"
                                value="{{auth()->user()->ap_materno}}" name="materno" required>
                        </div>

                        <div class="form-row">

                            <label for="email" class="col-md-1">Email:</label>
                            <input type="email" class="form-control campos col-md-2" value="{{auth()->user()->email}}"
                                id="email" disabled>
                            <!--
                            <label for="password" class="col-md-1">Contraseña:</label>
                            <input type="password" class="form-control campos col-md-2"
                                placeholder="Enter actual password" id="password">

                            <label for="npassword" class="col-md-1">Nueva contraseña:</label>
                            <input type="password" class="form-control campos col-md-2"
                                placeholder="Enter a new password  id=" npassword">
                            -->
                        </div>
                        <!--
                        <div class="form-row">
                        
                            <label for="password" class="col-md-1">Confirme contraseña:</label>
                            <input type="password" class="form-control campos col-md-2"
                                placeholder="Confirm new password" id="confirm">

                        </div> -->
                        <div class="form-row">
                            <button type="submit" class="btn btn-primary col-md-4 offset-md-1">Submit</button>
                            <button type="button" class="btn btn-danger col-md-4 offset-md-2"
                                onclick="cancelarEditProfile()">Cancelar</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section id="contenido">
<div class="row" id="informacionUser">
    <div class="col-md-3">
        @if(isset($maestro))
        <div class="row">
            <div id="icon" onclick="esMaestro()">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" />
                    <path fill-rule="evenodd"
                        d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z" />
                </svg>
            </div>

        </div>
        <h2>Información
            profesional
            @endif
        </h2>
        @if(isset($alumno))
        <div class="row">
            <div id="icon" onclick="esEstudiante()">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" />
                    <path fill-rule="evenodd"
                        d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z" />
                </svg>
            </div>

        </div>
        <h2>Información académica</h2>

        @endif


        <div class="row" id="vistaProfesional">



            @if(isset($maestro))

            <label for="">Nivel de estudios: {{$maestro->nivelEstudios}}</label><br>
            <label for="">Idioma que imparte: {{$maestro->IdiomaImparte}}</label><br>
            <label for="">Nivel del idioma: {{$maestro->nivelesIdioma}}</label><br>
            <label for="">Años de experiencia: {{$maestro->aniosExp}}</label><br>
            <label for="">Teléfono: {{$maestro->telefono}}</label><br>
            @endif

            @if(isset($alumno))
            <label for="">CURP: {{$alumno->curp}}</label><br>
            <label for="">Grado: {{$alumno->grado}}</label><br>
            <label for="">Grupo: {{$alumno->grupo}}</label><br>
            <label for="">Nivel: {{$alumno->nivel}}</label><br>

            @endif

        </div>
    </div>
    <div class="col-md-8" id="divContent">
        <section id="ActReciente">

            <h2>Actividad reciente</h2>
        </section>
        @if(isset($maestro))
        <form action="{{route('update.maestro')}}" method="post" id="formVistaProfesional">
            @method('PUT')
            @csrf
            <fieldset>
                <legend>Editar información profesional</legend>
                <!-- CAMPOS PARA UN MAESTRO -->
                <div class="form-group row">
                    <label for="nivelEstudios"
                        class="col-md-4 col-form-label text-md-right">{{ __('Nivel de estudios:') }}</label>

                    <div class="col-md-4" id="campo">
                        <select name="nivelEstudios" id="nivelEstudios" type="button"
                            class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @switch($maestro->nivelEstudios)

                            @case('Preparatoria')
                            <option selected>Preparatoria</option>
                            <option>Licenciatura/Ingeniería</option>
                            <option>Maestría</option>
                            <option>Doctorado</option>
                            @break

                            @case('Licenciatura/Ingeniería')
                            <option>Preparatoria</option>
                            <option selected>Licenciatura/Ingeniería</option>
                            <option>Maestría</option>
                            <option>Doctorado</option>
                            @break

                            @case('Maestría')
                            <option>Preparatoria</option>
                            <option>Licenciatura/Ingeniería</option>
                            <option selected>Maestría</option>
                            <option>Doctorado</option>
                            @break

                            @case('Doctorado')
                            <option>Preparatoria</option>
                            <option>Licenciatura/Ingeniería</option>
                            <option>Maestría</option>
                            <option selected>Doctorado</option>
                            @break

                            @endswitch
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="idioma"
                        class="col-md-4 col-form-label text-md-right">{{ __('Idioma que imparte:') }}</label>

                    <div class="col-md-6" id="campo">
                        <select name="idioma" id="idioma" type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch($maestro->IdiomaImparte)
                            @case('Inglés')
                            <option selected>Inglés</option>
                            <option>Francés</option>
                            <option>Italiano</option>
                            <option>Chino</option>
                            @break

                            @case('Francés')
                            <option>Inglés</option>
                            <option selected>Francés</option>
                            <option>Italiano</option>
                            <option>Chino</option>
                            @break

                            @case('Italiano')
                            <option>Inglés</option>
                            <option>Francés</option>
                            <option selected>Italiano</option>
                            <option>Chino</option>
                            @break
                            @case('Chino')
                            <option>Inglés</option>
                            <option>Francés</option>
                            <option>Italiano</option>
                            <option selected>Chino</option>
                            @break
                            @endswitch
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nivelImparte"
                        class="col-md-4 col-form-label text-md-right">{{ __('Nivel que imparte:') }}</label>

                    <div class="col-md-6" id="campo">
                        <select name="nivelImparte" id="nivelImparte" type="button"
                            class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" ">
                            @if($maestro->nivelesIdioma=="A1")
                            <option selected>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>
                            @endif
                            @if($maestro->nivelesIdioma=="A2")
                            <option>A1</option>
                            <option selected>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>
                            @endif
                            @if($maestro->nivelesIdioma=="A3")
                            <option>A1</option>
                            <option>A2</option>
                            <option selected>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>
                            @endif
                            @if($maestro->nivelesIdioma=="B1")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option selected>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>
                            @endif
                            @if($maestro->nivelesIdioma=="B2")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option selected>B2</option>
                            <option>C1</option>
                            <option>C2</option>
                            @endif
                            @if($maestro->nivelesIdioma=="C1")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option selected>C1</option>
                            <option>C2</option>
                            @endif
                            @if($maestro->nivelesIdioma=="C2")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option selected>C2</option>
                            @endif
                            
                        

                        </select>


                    </div>
                </div>

                <div class=" form-group row">
                            <label for="aniosExp"
                                class="col-md-4 col-form-label text-md-right">{{ __('Años de experiencia:') }}</label>

                            <div class="col-md-4" id="campo">
                                <input id="aniosExp" type="number"
                                    class="form-control @error('aniosExp') is-invalid @enderror" name="aniosExp"
                                    value="{{$maestro->aniosExp }}" autocomplete="aniosExp" autofocus>

                                @error('anios')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="telefono"
                            class="col-md-4 col-form-label text-md-right">{{ __('Número telefónico:') }}</label>

                        <div class="col-md-4" id="campo">
                            <input id="telefono" type="text"
                                class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                value="{{ $maestro->telefono}}" autocomplete="telefono" autofocus>

                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-3"></div>
                        <div class="col-md-2 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                        <div class="col-md-2 offset-md-1">
                            <button type="button" class="btn btn-danger" onclick="cancelarActProfesional()">
                                {{ __('Cancel') }}
                            </button>
                        </div>
                    </div>
            </fieldset>




        </form>
        @endif
        @if(isset($alumno))
        <form action="{{route('update.alumno')}}" method="post" id="formVistaAcademica">
            @method('PUT')
            @csrf
            <fieldset>
                <legend>Editar información académica</legend>

                <div class="form-group row">
                    <label for="curp" class="col-md-2 col-form-label text-md-left">{{ __('CURP:') }}</label>

                    <div class="col-md-3" id="campo">
                        <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror"
                            name="curp" value="{{ $alumno->curp }}" autocomplete="curp" autofocus>

                        @error('curp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="nivel"
                        class="col-md-2 col-form-label text-md-left">{{ __('Nivel en el que te encuentras:') }}</label>

                    <div class="col-md-3" id="campo">
                        <select name="nivel" id="nivel" type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch($alumno->nivel)
                            @case("A1")
                            <option seleted>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>

                            @break

                            @case("A2")
                            <option>A1</option>
                            <option selected>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>

                            @break

                            @case("A3")
                            <option>A1</option>
                            <option>A2</option>
                            <option selected>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>

                            @break
                            @case("B1")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option selected>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option>C2</option>

                            @break
                            @case("B2")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option selected>B2</option>
                            <option>C1</option>
                            <option>C2</option>

                            @break
                            @case("C1")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option selected>C1</option>
                            <option>C2</option>

                            @break
                            @case("C2")
                            <option>A1</option>
                            <option>A2</option>
                            <option>A3</option>
                            <option>B1</option>
                            <option>B2</option>
                            <option>C1</option>
                            <option selected>C2</option>

                            @break
                            

                            @endswitch
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="grado" class="col-md-2 col-form-label text-md-left">{{ __('Grado:') }}</label>

                    <div class="col-md-3" id="campo">
                        <select name="grado" id="grado" type="button" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch($alumno->grado)
                            @case("Primer grado")
                            <option selected>Primer grado</option>
                            <option>Segundo grado</option>
                            <option>Tercer grado</option>

                            @break

                            @case("Segundo grado")
                            <option>Primer grado</option>
                            <option selected>Segundo grado</option>
                            <option>Tercer grado</option>

                            @break
                            @case("Tercer grado")
                            <option>Primer grado</option>
                            <option>Segundo grado</option>
                            <option selected>Tercer grado</option>

                            @break
                            @endswitch
                            
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="grupo" class="col-md-2 col-form-label text-md-left">{{ __('Grupo:') }}</label>

                    <div class="col-md-3" id="campo">
                        <input id="grupo" type="text" class="form-control @error('grupo') is-invalid @enderror"
                            name="grupo" value="{{ $alumno->grupo }}" autocomplete="grupo" autofocus>

                        @error('grupo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>





                <div class="form-group row mb-0">
                    <div class="col-md-3"></div>
                    <div class="col-md-2 offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <button type="button" class="btn btn-danger" onclick="cancelarActProfesional()">
                            {{ __('Cancel') }}
                        </button>
                    </div>
                </div>
            </fieldset>




        </form>
        @endif
    </div>

</div>
<section>

</section>

@endsection