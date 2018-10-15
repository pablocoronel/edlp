@extends('layouts/principal')
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/error.css')}}">
        
        {{-- Font texto --}}
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	@endsection

	@section('titulo')
		Error 404 - EDLP
	@endsection

	@section('contenido')
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

		{{-- Cuerpo de la pagina --}}

        <div class="container">
        	<div class="row">
        		<div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
        			<div id="recuadroPadre">
        				<div class="renglon renglonRojo">
        					<p>La p&aacute;gina solicitada no existe o fue eliminada</p>
        				</div>
        				<div class="renglon" id="renglonBlanco">
        					<button class="btn btn-primary" onClick="javascript:window.location.href='{{URL::asset('/')}}'">Ir al inicio</button>
        				</div>
        				<div class="renglon renglonRojo"></div>
        			</div>
        		</div>
        	</div>
        </div>

        @include('footer/footer')
	@endsection