@extends('layouts/principal')
	{{-- CSS's --}}
	@section('cssParticular')
		{{-- CSS particular --}}
		<link rel="stylesheet" href="{{URL::asset('css/historiasCrearYEditar.css')}}">
	@endsection

	{{-- Titulo --}}
	@section('titulo')
		Crear historia - EDLP
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

		{{-- Formulario de "crear historia" --}}
		@extends('historias.formulario.crearYEditar')
			@section('action'){{URL::to('historias')}}@endsection

	@include('footer/footer')
@endsection