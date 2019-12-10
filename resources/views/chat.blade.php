@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row no-gutters contact-msg-box">
      {{-- contact content --}}
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-3">
            <img class="round-img img-fluid" src="{{asset('assets/images/avatar-m.jpeg')}}" alt="">
          </div>
          <div class="col-md-9">
            <p><strong>Nombre contacto</strong></p>
            <span>Mensja de contacto</span>
            <p>estado</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img class="round-img img-fluid" src="{{asset('assets/images/avatar-m.jpeg')}}" alt="">
          </div>
          <div class="col-md-9">
            <p><strong>Nombre contacto</strong></p>
            <span>Mensja de contacto</span>
            <p>estado</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img class="round-img img-fluid" src="{{asset('assets/images/avatar-m.jpeg')}}" alt="">
          </div>
          <div class="col-md-9">
            <p><strong>Nombre contacto</strong></p>
            <span>Mensja de contacto</span>
            <p>estado</p>
          </div>
        </div>

      </div>
      <div class="col-md-8 left-border">
        <div class="msg-box">
          {{-- msj content --}}

        </div>
        <div>
            <textarea class="form-control" id="txtMensaje"></textarea>
            <button type="button" class="btn btn-raised btn-primary" id="btnMensaje">Enviar</button>
        </div>
      </div>
    </div>
  </div>

    {{--<div class="col-sm-10 col-sm-offset-1" id="contMsjs"></div>
     <div class="well">
       <div class="row">
		     <div class="col-sm-6 col col-sm-offset-1">
				   <textarea class="form-control" id="txtMensaje"></textarea>
			   </div>
			   <div class="col-sm-2">
				    <button type="button" class="btn btn-raised btn-primary" id="btnMensaje">Enviar</button>
			   </div>
	    </div>
    </div>--}}
@endsection
