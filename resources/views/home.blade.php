@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Dashboard</div>

					<div class="card-body">
						@if (session('status'))
								<div class="alert alert-success" role="alert">
										{{ session('status') }}
								</div>
						@endif

						You are logged in!
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="col-xs-6 col-sm-4 col-md-4">
				<img class="img-circle img-fluid imge" src="https://image.flaticon.com/icons/png/512/329/329420.png">
				<h3><strong>Facil de Usar</strong></h3>
				<p>Solo debes llenar nuestro formulario de registro o comienza a disfrutar del chat</p>
			</div>
		
			<div class="col-xs-6 col-sm-4 col-md-4">
				<img class="img-circle img-fluid imge" src="https://image.flaticon.com/icons/png/512/398/398654.png">
				<h3><strong>Seguro</strong></h3>
				<p>comunicacion segura entre tus contactos</p>
			</div>
		
			<div class="col-xs-6 col-sm-4 col-md-4">
				<img class="img-circle img-fluid imge" src="https://image.flaticon.com/icons/png/512/283/283892.png">
				<h3><strong>Comunicacion Efectiva</strong></h3>
				<p>comunicate con quien quieras de manera rapida</p>
			</div>
		</div>
  </div>
@endsection
