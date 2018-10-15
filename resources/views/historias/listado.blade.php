@extends('layouts/principal')
	{{-- CSS Particular --}}
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/historiasListado.css')}}">
		{{-- Font jumbotron --}}
		<link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>

		{{-- Font titulo de historia --}}
		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	@endsection

	{{-- Titulo --}}
	@section('titulo')
		Historias - EDLP
	@endsection


	{{-- Contenido --}}
	@section('contenido')
		{{-- Menu principal --}}
		@include('menuPrincipal/menu')

		{{-- Formulario de registro --}}
    	@include('registrarse/formularioDeRegistro')

		@if(count($errors) > 0)
            @if ($errors->has('usuarioRegistro') || ($errors->has('claveRegistro')) || ($errors->has('emailRegistro')))
                   {{--  {{ $errors->first('usuarioRegistro') }} --}}
                <script>
                    $(function() {
                        $('#registrarse').modal('show');
                    });
                </script>
            @endif
        @endif
		
		{{-- Encabezado --}}
		<div class="jumbotron">
			<div class="container">
				<h1>Historias <a href="historias/create" class="btn btn-success active">Agregar una nueva historia</a></h1>
				<p>Partidos, jugadores, cl&aacute;sicos, an&eacute;cdotas y otros momentos que hacen a la historia del club.</p>
			</div>
		</div>
		<div class="container" id="contenedor">			
			{{-- Temas --}}
			@foreach($historia as $cadaHistoria)
			<div class="row" id="filaContenedor">
				<div class="col-xs-12 col-md-7" id="portada">
					<a href="{{URL::to('historias/'.$cadaHistoria->id)}}">
						<img src="{{URL::asset('images/historiaPortada/'.$cadaHistoria->id.'/'.$cadaHistoria->nombre_portada)}}" alt="imagenDePortada" class="img-responsive img-thumbnail center-block">
					</a>
				</div>
			
				<div class="col-xs-12 col-md-5" id="descripcion">
					<h2>{{$cadaHistoria->titulo}}</h2>
					<div class="textoHistoria">
						<p>{!!$cadaHistoria->contenido!!}</p>
					</div>
					<a class="btn btn-primary" href="{{URL::to('historias/'.$cadaHistoria->id)}}">Leer m&aacute;s...</a>
				</div>
			</div>
			@endforeach
		
				{{-- Paginado --}}
				{!!$historia->render()!!}
		</div>

		@include('footer/footer')
	@endsection