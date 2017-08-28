@extends('plantilla.base')

@section('title', 'chat')


@extends('layouts.app')
@section('style')
  {!! Html::style("css/estilos.css") !!}
@section('content')

  @include('parciales.navbarLogin')

  <!--<div class="">
    <div class="">-->
      <div class="col-sm-10 col-sm-offset-1" id="contMsjs"></div>
     <div class="well">
       <div class="row">
		     <div class="col-sm-6 col col-sm-offset-1">
				   <textarea class="form-control" id="txtMensaje"></textarea>
			   </div>
			   <div class="col-sm-2">
				    <button type="button" class="btn btn-raised btn-primary" id="btnMensaje">Enviar</button>
			   </div>
	      </div>
      </div>
    <!--</div>
  </div>-->

  @include('parciales.footer')

  {!! Html::script('js/jquery-2.1.1.js') !!}
  {!! Html::script('js/script.js') !!}
@endsection
