@extends('layouts/principal')
	@section('cssParticular')
		<link rel="stylesheet" href="{{URL::asset('css/invitacion.css')}}">

		{{-- Font de texto superior en formulario --}}
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	@endsection

	@section('titulo')
		Ingresar - EDLP
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

        {{-- ****************** cuerpo ******************** --}}

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center" id="encabezado">
					<div id="texto">
						<p>Para crear una nueva historia ingres&aacute; con tu usuario y contrase&ntilde;a o registrate.</p>
						<p>Es simple y r&aacute;pido</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2" id="contenedorRegistro">
					<form class="form-horizontal" method="POST" action="{{URL::to('procesarRegistroInvitacion')}}" onSubmit="javascript:return registro()">
					
			            {{-- Agregar un tokem --}}
			            {!!csrf_field()!!}
			
			                {{-- Ver errores --}}
			             {{--  @if(redirect()->back() == 'procesarRegistro') --}}
			                @if(count($errors) > 0)
			                    @if ($errors->has('usuarioRegistroInvitacion') || ($errors->has('claveRegistroInvitacion')) || ($errors->has('emailRegistroInvitacion')))
			                          <div class="alert alert-danger" role="alert">
			                            <ul>
			                              @foreach($errors->all() as $cadaError)
			                                  <li>{{$cadaError}}</li>
			                              @endforeach
			                            </ul>
			                          </div>
			                    @endif
			                @endif
							
							<div class="text-center">
								<h4>Registrarme</h4>
							</div>

			                <div id="recuadroUsuarioInvitacion" class="form-group">
			                    <label for="usuarioRegistroInvitacion" class="col-sm-3 control-label">Usuario</label>
			                    <div class="col-sm-9">
			                      <input type="text" class="form-control" name="usuarioRegistroInvitacion" id="usuarioRegistroInvitacion" placeholder="Usuario" data-toggle="tooltip" data-placement="top" value="{{old('usuarioRegistroInvitacion')}}">
			                    </div>
			                </div>
			
			                <div id="recuadroClaveInvitacion" class="form-group">
			                    <label for="claveRegistroInvitacion" class="col-sm-3 control-label">Contrase&ntilde;a</label>
			                    <div class="col-sm-9">
			                      <input type="password" class="form-control" name="claveRegistroInvitacion" id="claveRegistroInvitacion" placeholder="Contrase&ntilde;a" data-toggle="tooltip" data-placement="top">
			                    </div>
			                </div>
			
			                <div id="recuadroEmailInvitacion" class="form-group">
			                    <label for="emailRegistroInvitacion" class="col-sm-3 control-label">Email</label>
			                    <div class="col-sm-9">
			                      <input type="email" class="form-control" name="emailRegistroInvitacion" id="emailRegistroInvitacion" placeholder="Email" data-toggle="tooltip" data-placement="top" value="{{old('emailRegistroInvitacion')}}">
			                    </div>
			                </div>
			            
				            <div class="col-xs-12">
				            	<button type="submit" class="btn btn-success center-block">Registrarme</button>
				            </div>
			        </form>
				</div>
			</div>
		</div>
		
		@include('footer/footer')
	@endsection