@extends('plantilla.base')

@section('title', 'Chat en PHP/Laravel')
@section('style')
  <!--estilos css-->

@endsection
@extends('layouts.app')
@section('content')

<!--Simple Landing page-->
@include('parciales.navbar')

@include('parciales.carLandding')

<div class="container">

  <div class="text-center col-xs-6 col-sm-4">
    <img class="img-circle imge" src="https://image.flaticon.com/icons/png/512/329/329420.png">
    <h3><strong>Facil de Usar</strong></h3>
    <p>Solo debes llenar nuestro formulario de registro o comienza a disfrutar del chat</p>
  </div>

  <div class="text-center col-xs-6 col-sm-4">
    <img class="img-circle imge" src="https://image.flaticon.com/icons/png/512/398/398654.png">
    <h3><strong>Seguro</strong></h3>
    <p>comunicacion segura entre tus contactos</p>
  </div>

  <div class="text-center col-xs-6 col-sm-4">
    <img class="img-circle imge" src="https://image.flaticon.com/icons/png/512/283/283892.png">
    <h3><strong>Comunicacion Efectiva</strong></h3>
    <p>comunicate con quien quieras de manera rapida</p>
  </div>

</div>

@include('parciales.footer')
@endsection
