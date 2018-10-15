@extends('layouts/principal')
	{{-- CSS particular --}}
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/historiasVer.css')}}">

		{{-- Font titulo de historia --}}
		<link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<script>
			// Antes de eliminar una historia
			function borrarHistoria(){
				return confirm("¿Esta seguro que desea eliminar la historia?");
			}
		</script>

		{{-- Script Google plus de compartir historia --}}
		<script src="https://apis.google.com/js/platform.js" async defer>
		  {lang: 'es'}
		</script>
	@endsection

	{{-- Titulo --}}
	@section('titulo')
		{{$historia->titulo}} - EDLP
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

		{{-- Cuerpo --}}
		<div class="container">
			<div class="row">
				<div class="row" id="filaBotonesEditarBorrar">
					<div class="col-xs-3 col-sm-1" id="botonesEditarBorrar">
						@can('edit', $historia)
							<a class="btn btn-success" href="{{$historia->id}}/edit">Editar</a>
						@endcan
					</div>
					
						{{-- Envia el verbo DELETE --}}
					<div class="col-xs-3 col-sm-1" id="botonesEditarBorrar">
						@can('destroy', $historia)
							<form method="post" action="{{$historia->id}}" onSubmit="javascript:return borrarHistoria()">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								{{ method_field('DELETE') }}
								<input type="submit" class="btn btn-danger" value="Borrar">
							</form>
						@endcan
					</div>
				</div>
				<div class="row">	
					{{-- Facebook - compartir historia --}}
					<div class="fb-share-button col-xs-4 col-sm-2 col-sm-push-6" data-href="http://estudiantesdlp.webscenario.com.ar/historias/{{$historia->id}}" data-layout="button_count"></div>

					{{-- Twitter - compartir historia --}}
					<div class="col-xs-4 col-sm-2 col-sm-push-6">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://estudiantesdlp.webscenario.com.ar/historias/{{$historia->id}}" data-lang="es" data-size="large">Twittear</a>
					</div>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
						</script>

					{{-- Google plus - compartir historia --}}
					<div class="col-xs-4 col-sm-2 col-sm-push-6">
						<div class="g-plus" data-action="share" data-height="24" data-annotation="bubble" data-href="http://estudiantesdlp.webscenario.com.ar/historias/{{$historia->id}}"></div>
					</div>
				</div>
				
				<div class="col-xs-12 text-center" id="titulo">
					<h2>{{$historia->titulo}}</h2>
					
				</div>

				<div class="col-xs-12" id="contenido">
					{!!$historia->contenido!!}
				</div>

				{{-- Titulo comentarios --}}
				<div class="col-xs-12 text-center" id="comentariosEncabezado">
					Comentarios
				</div>
				
				{{-- Cada comentario --}}
				@foreach($comentariosPost as $cadaComentario)
					<div class="col-xs-12" id="cadaComentario">
						<div class="media">
							<div class="media-left">
								<img src="{{URL::asset('images/avatar.png')}}" alt="avatar">
							</div>
							<div class="media-body">
							@if(is_null($cadaComentario->id_usuario))
								<h4>{{$cadaComentario->apodo_anonimo}}</h4>
							@else
								<h4>{{$cadaComentario->usuario}}</h4>
							@endif

								<p>{{$cadaComentario->comentario}}</p>
							</div>
						</div>
					</div>
				@endforeach

				{{-- Agregar comentario --}}
				<div class="col-xs-12"id="comentariosAgregar">
					<div class="row">
						<div class="col-xs-12 text-center" id="comentariosTitulo">
							<h3>Agregar un comentario</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							@if(count($errors) > 0)
								@if ($errors->has('apodo_anonimo') || ($errors->has('comentario')))
									<div class="alert alert-danger">
										<ul>
											@foreach($errors->all() as $cadaError)
												<li>{{$cadaError}}</li>
											@endforeach
										</ul>
									</div>
								@endif
							@endif
						</div>
					</div>

					<form action="{{URL::to('enviarComentario')}}" method="post" class="form-horizontal">
						{{csrf_field()}}

						<input type="hidden" name="id_historia" value="{{Request::segment(2)}}">
						
						<fieldset>
							@if(!Auth::check())
								<div class="form-group">
									<label for="apodo_anonimo" class="center-block">Nombre</label>
									<div class="col-xs-12">
										<input type="text" class="center-block" name="apodo_anonimo" id="apodo_anonimo" value="{{old('apodo_anonimo')}}">
									</div>
								</div>
							@endif
						
							<div class="form-group">
								<label for="comentario" class="center-block">Comentario</label>
								<div class="col-xs-12">
									<textarea name="comentario" class="center-block" id="comentario" cols="25" rows="5">{{old('comentario')}}</textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-12">
									<input type="submit" value="Enviar" class="btn btn-success center-block">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		@include('footer/footer')

		{{-- SDK Facebook en historias --}}
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	@endsection

