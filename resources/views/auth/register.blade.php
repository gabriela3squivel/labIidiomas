@extends('plantillaInfo')

@section('titulo')Registrarse @endsection

@section('menu')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
    </li>
</ul>


@endsection
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Por favor, corrige los siguentes errores:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!--Fin error -->

                @if (session('mensaje'))
                <div class="alert alert-success">
                    {{session('mensaje')}}
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('registrarse') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paterno"
                                class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno:') }}</label>

                            <div class="col-md-6">
                                <input id="paterno" type="text"
                                    class="form-control @error('paterno') is-invalid @enderror" name="paterno"
                                    value="{{ old('paterno') }}" required autocomplete="paterno" autofocus>

                                @error('paterno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="materno"
                                class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno:') }}</label>

                            <div class="col-md-6">
                                <input id="materno" type="text"
                                    class="form-control @error('materno') is-invalid @enderror" name="materno"
                                    value="{{ old('materno') }}" required autocomplete="materno" autofocus>

                                @error('materno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirme Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo"
                                class="col-md-4 col-form-label text-md-right">{{ __('Escoja su rol dentro de la plataforma') }}</label>

                            <div class="col-md-6">
                                <input type="radio" name="tipo" id="maestro" value="maestro" onclick="editarCampos()"
                                    required autofocus>Maestro
                                <input type="radio" name="tipo" value="alumno" onclick="editarCampos()" required
                                    autofocus checked>Alumno

                                @error('tipo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- CAMPOS PARA UN ALUMNO-->
                        <div id="camposAlumno">
                            <div class="form-group row">
                                <label for="curp"
                                    class="col-md-4 col-form-label text-md-right">{{ __('CURP:') }}</label>

                                <div class="col-md-6">
                                    <input id="curp" type="text"
                                        class="form-control @error('curp') is-invalid @enderror" name="curp"
                                        value="{{ old('curp') }}" autocomplete="curp" autofocus>

                                    @error('curp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="nivel"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nivel en el que te encuentras:') }}</label>

                                <div class="col-md-6">
                                    <select name="nivel" id="nivel" type="button"
                                        class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <option>A1</option>
                                        <option>A2</option>
                                        <option>A3</option>
                                        <option>B1</option>
                                        <option>B2</option>
                                        <option>C1</option>
                                        <option>C2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="grado"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Grado:') }}</label>

                                <div class="col-md-6">
                                    <select name="grado" id="grado" type="button"
                                        class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <option>Primer grado</option>
                                        <option>Segundo grado</option>
                                        <option>Tercer grado</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="grupo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Grupo:') }}</label>

                                <div class="col-md-6">
                                    <input id="grupo" type="text"
                                        class="form-control @error('grupo') is-invalid @enderror" name="grupo"
                                        value="{{ old('grupo') }}" autocomplete="grupo" autofocus>

                                    @error('grupo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                        </div>
                        <!-- FIN CAMPOS PARA ALUMNO-->

                        <!-- CAMPOS PARA UN MAESTRO -->
                        <div id="camposMaestro">
                            <div class="form-group row">
                                <label for="nivelEstudios"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nivel de estudios:') }}</label>

                                <div class="col-md-6">
                                    <select name="nivelEstudios" id="nivelEstudios" type="button"
                                        class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <option>Preparatoria</option>
                                        <option>Licenciatura/Ingeniería</option>
                                        <option>Maestría</option>
                                        <option>Doctorado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="idioma"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Idioma que imparte:') }}</label>

                                <div class="col-md-6">
                                    <select name="idioma" id="idioma" type="button"
                                        class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <option>Inglés</option>
                                        <option>Francés</option>
                                        <option>Italiano</option>
                                        <option>Chino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nivelImparte"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nivel que imparte:') }}</label>

                                <div class="col-md-6">
                                    <select name="nivelImparte" id="nivelImparte" type="button"
                                        class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">

                                        <option>A1</option>
                                        <option>A2</option>
                                        <option>A3</option>
                                        <option>B1</option>
                                        <option>B2</option>
                                        <option>C1</option>
                                        <option>C2</option>

                                    </select>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="aniosExp"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Años de experiencia:') }}</label>

                                <div class="col-md-6">
                                    <input id="aniosExp" type="number"
                                        class="form-control @error('aniosExp') is-invalid @enderror" name="aniosExp"
                                        value="{{ old('aniosExp') }}" autocomplete="aniosExp" autofocus>

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

                                <div class="col-md-6">
                                    <input id="telefono" type="text"
                                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                        value="{{ old('telefono') }}" autocomplete="telefono" autofocus>

                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!--FIN CAMPOS PARA UN MAESTRO -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection