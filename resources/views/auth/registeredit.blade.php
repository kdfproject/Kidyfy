@extends('layouts.app')

@section('titulo')
  Editar Perfil
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 fixed-top">
          <div class="panel panel-default">
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="/registro/{{\Auth::user()->id}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre y Apellido</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div> -->

                <div class="form-group{{ $errors->has('fecha_de_nacimiento') ? ' has-error' : '' }}">
                    <label for="fecha_de_nacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                    <div class="col-md-6">
                        <input id="fecha_de_nacimiento" type="text" class="form-control" name="fecha_de_nacimiento" value="{{ $user->fecha_de_nacimiento }}" required autofocus>

                        @if ($errors->has('fecha_de_nacimiento'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fecha_de_nacimiento') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                    <label for="genero" class="col-md-4 control-label">Género</label>

                    <div class="col-sm-6 col-sm-offset-6">
                        <input  type="radio"  name="genero" value="F" checked>Femenino
                        <input  type="radio"  name="genero" value="M" >Masculino

                        @if ($errors->has('genero'))
                            <span class="help-block">
                                <strong>{{ $errors->first('genero') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                  <label for="imagen" class="col-md-4 control-label">Imágen Perfil</label>
                  <label for="imageninput" class="col-md-6 control-label">
                  @if (is_object(\Auth::user()->image))
                    <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="65" width="65" alt="Avatar">
                  @endif
                  <input id="file" class="inputfile" name="file" type="file" size="2mb" style="display:inline-block">
                  <label for="file" class="col-sm-offset-3"><span >Cambiar Foto</span></label>
                  </label>
                </div>

                <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Contraseña</label>

                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" placeholder="contraseña" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div> -->

                  <div class="form-group">
                      <div class="col-md-4 control-label">
                          <a class="btn btn-link" href="/usuario2/{{Auth::user()->id }}/editar"
                          </a>Agregar más datos
                            <!-- {{-- onclick="event.preventDefault();
                                     document.getElementById('usersecondarieedit-form').submit();"> --}}
                          {{-- <form id="usersecondarieedit-form" action="/usuario2/{{Auth::user()->id}}/editar" method="GET" style="display: none;">
                              {{ csrf_field() }}
                          </form> --}} -->
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary mgtop20 pull-right mgright25">
                              Confirmar
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
@extends('partials.footerkdf')
