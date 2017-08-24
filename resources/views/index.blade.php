@extends('plantilla.base')

@section('title','Perfil User')

@extends('layouts.app')
@section('content')

  @include('parciales.navbarLogin')
  <div class="container">
    <div class="row">
      <h1 class="text-center">Perfil de Usuario</h1>
      <hr>
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body alert alert-info">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                @if(Auth::user()->img == 'default')
                <img class="img-circle img-responsive center-block imag" src="{{Auth::user()->img}}.png">
                @else
                  <img class="img-circle img-responsive center-block imag" src="{{Auth::user()->img}}">
                @endif
              </div>
              <div class="textPanel text-center col-md-4 col-md-offset-4">
                <p>{{Auth::user()->name}}</p>
                <p>{{Auth::user()->email}}</p>
              </div>
              <div class="col-md-12">
                <a class="btn btn-raised btn-success center-block" href="{{route('editar' , Auth::user()->id)}}">Editar Usuario</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






  @include('parciales.footer')
@endsection
