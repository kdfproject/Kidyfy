@extends('layouts.app')
@section('titulo')
  Mi Perfil - {{Auth::user()->name }}
@endsection

@section('content')
<div class="container">
<div class="row">
  <div class="col-sm-3 bkg-white brd-top">
    <div class="pdtop20">
      <p class="font-size-large"><a href="/home/{{Auth::user()->id }}">{{\Auth::user()->name}}</a></p>
      <br>
      @if (is_object(\Auth::user()->image))
        <img src="/img/{{\Auth::user()->image->src}}" class="img-square" height="65" width="65" alt="Avatar">
      @endif
    </div>
    <div class="mgtop20 ">
        <h4><a href="/grupo/{{Auth::user()->id }}">Grupos</a></h4>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-hospital-o "></i></span>
          </div>
          <div class="col-sm-10">
            <label for="establecimientos"><a href="establecimientos/{{Auth::user()->id }}"> Establecimientos Medicos</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-stethoscope"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="medicos"><a href="medicos/{{Auth::user()->id }}"> Medicos</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-briefcase"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="indumentaria"><a href="indumentaria/{{Auth::user()->id }}"> Indumentaria</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
          </div>
          <div class="col-sm-10">
            <label for="Colegios"><a href="colegios/{{Auth::user()->id }}"> Colegios</a></label>
          </div>
        </div>
        <div class="row margin-btn-10">
          <div class="col-sm-2">
            <span class="icon"><i class="fa fa-life-ring "></i></span>
          </div>
          <div class="col-sm-10">
            <label for="colonias"><a href="colonias/{{Auth::user()->id }}"> Colonias</a></label>
          </div>
        </div>
    </div>
    <div class="alert alert-info fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <a href="{{url ('/home/grupo')}}"><p><strong>¿Tienes sugerencias?</strong></p>
      Estaremos felices de recibir tu opinión</a>
    </div>
  </div>
  <div class="col-sm-7">

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
        <p>
          VISTA DE USUARIO A TRABAJAR!
        </p>
      </div>
      @foreach ($posts as $post)
        <div class="col-sm-10 col-sm-offset-1 commentbox bkg-white">
          <div class="row">
            <div class="col-sm-12">
              <p class="font-size-medium">
                {{ $post->user->name }} el {{$post->created_at}}
              </p>
            </div>
            <div class="col-sm-10">
              <p class="font-size-large"><img src="/img/{{$post->user->image->src}}" class="img-square" height="40" width="40" alt="Avatar"> {{ $post->post_text }}</p>
            </div>
          </div>


        </div>
      @endforeach
    </div>
  </div>
  <div class="col-sm-2 bkg-white brd-top">
    <div class="pdtop20">
      <img src="img/ads/huggies.jpeg" alt="" class="img-responsive" />
    </div>
    <div class="">
      <p>ADS</p>
    </div>
    <div id="eventsapp">
    </div>
  </div>
</div>
</div>
<!-- Finish MainContainer -->
@endsection
@extends('partials.footerkdf')
