@extends('layouts/principal')
	{{-- CSS particular --}}
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/historiasCrearYEditar.css')}}">
	@endsection

	{{-- Titulo --}}
	@section('titulo')
		Editar - EDLP
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
		
		{{-- Formulario para editar historia--}}
		@extends('historias.formulario.crearYEditar')
			@section('action'){{URL::to('historias/'.$historia->id)}}@endsection
			@section('metodoFormulario'){{method_field('PUT')}}@endsection
			@section('textoTitulo'){{trim($historia->titulo)}}@stop
			{{-- @section('textoTitulo'){{$historia->titulo}}@stop --}}
			@section('textoContenido'){{$historia->contenido}}@endsection
		

		{{-- Checkbox de imagen de portada --}}
		<script>
			$(document).ready(function(){
				$("#mantenerImagen").change(function(){
					if (this.checked) {
						$("#imagenDePortada").prop("disabled", "disabled");
					}else{
						$("#imagenDePortada").prop("disabled", false);
					}
				});
			});
		</script>

		@include('footer/footer')
	@endsection