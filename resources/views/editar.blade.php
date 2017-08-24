@extends('plantilla.base')

@section('title','editar usuario')

@extends('layouts.app')

@section('content')
  @include('parciales.navbarLogin')
  <div class="container">
    <h1 class="text-center">Editar usuario</h1>
    <hr>
    <div class="alert col-md-12">

        {!! Form::open(['action' => ['UserController@update', Auth::user()->id], 'enctype' => 'multipart/form-data' ,'method' => 'PUT','class' => 'form-horizontal']) !!}


            <div class="form-group">
                {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Email', 'email:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::text('email', Auth::user()->email, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('contraseña', 'Contraseña:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('imagen', 'Imagen:', ['class' => 'control-label col-md-2']) !!}
                <div class="col-md-10">
                    {!! Form::file('img', ['class' => 'file', 'data-show-upload' => 'false']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-default btn-lg btn-block btn-raised btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
        </div>
  </div>


@endsection
