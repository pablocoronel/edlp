{{-- 4 campos yield => action, metodoFormulario, textoTitulo, textoContenido --}}
<div class="container" id="contenedor">
	<div class="row" id="rowContainer">
		{{-- Requisitos --}}
		<aside id="requisitos" class="col-xs-12 col-sm-3 col-sm-push-9">
			<div class="col-xs-12 text-center titulos">
		    	<label for="titulo">Requisitos</label>
		    </div>
			<div class="col-xs-12" id="textoRequisitos">
				<ul>
					<li>El t&iacute;tulo, contenido e im&aacute;gen de portada son obligatorios.</li>
					<li>El tit&uacute;lo debe tener entre 2 y 60 caracteres.</li>
					<li>El contenido no debe superar los 5000 caracteres.</li>
					<li>La im&aacute;gen de portada puede tener hasta 1MB de peso.</li>
					<li>La im&aacute;gen de portada debe tener unas dimensiones m&iacute;nimas de 100 px de altura por 200 px de ancho.</li>
				</ul>
			</div>
		</aside>

		{{-- Editor --}}
		<section id="editor" class="col-xs-12 col-sm-9 col-sm-pull-3">
			{{-- mostrar errores --}}
			<div class="col-xs-12">
				{{-- @if(count($errors) > 0)
					<div class="alert alert-danger" role="alert">
						@foreach($errors->all() as $cadaError)
							<ul>
								<li>
									{{$cadaError}}
								</li>
							</ul>
						@endforeach
					</div>
				@endif --}}
				
				{{-- Mensaje de error al almacenar la historia --}}
				{{-- @if(Session::has('rutaArchivo'))
					<div class="alert alert-danger" role="alert">
						{{Session::get('rutaArchivo', '')}}
					</div>
				@endif --}}
				
				{{-- Mensaje de exito --}}
				{{-- @if(Session::has('guardado'))
					<div class="alert alert-success" role="alert">
						{{Session::get('guardado', '')}}
					</div>
				@endif --}}
			</div>

			<form method="POST" action="@yield('action')" enctype="multipart/form-data" class="form-horizontal">
				@yield('metodoFormulario') {{-- Se setea metodos PUT, PATCH o DELETE que no viene en HTML nativo --}}
				{{csrf_field()}}
			  
			  <div class="form-group">
			    <div class="col-xs-12 text-center titulos">
			    	<label for="titulo">T&iacute;tulo</label>
			    </div>

				{{-- Errores del titulo --}}
				@foreach($errors->get('titulo') as $cadaErrorTitulo)
					<div class="alert alert-danger" role="alert">
			    		<ul>
			    			<li>{{$cadaErrorTitulo}}</li>
			    		</ul>
			    	</div>
		    	@endforeach

		    	{{-- Mensaje de error al almacenar la historia --}}
				@if(Session::has('rutaArchivo'))
					<div class="alert alert-danger" role="alert">
						{{Session::get('rutaArchivo', '')}}
					</div>
				@endif
				
				{{-- Mensaje de exito --}}
				@if(Session::has('guardado'))
					<div class="alert alert-success" role="alert">
						{{Session::get('guardado', '')}}
					</div>
				@endif

				<div class="col-xs-12">
					<input type="text" class="form-control" name="titulo" id="titulo" value="@if(!empty(old('titulo'))) {{trim(old('titulo'))}} @else @yield('textoTitulo') @endif" placeholder="Titulo"/>
				</div>
			  </div>
			  
			  {{-- editor de texto --}}
			  <div class="form-group">
			  	<div class="col-xs-12 text-center titulos">
			  		<label for="contenido">Contenido</label>
			  	</div>
				
				{{-- Errores del contenido --}}
			  	@foreach($errors->get('contenido') as $cadaErrorContenido)
					<div class="alert alert-danger" role="alert">
			    		<ul>
			    			<li>{{$cadaErrorContenido}}</li>
			    		</ul>
			    	</div>
		    	@endforeach

			  	<div class="col-xs-12">
			  		<textarea name="contenido" id="contenido" cols="30" rows="10">@if(!empty(old('contenido'))) {{old('contenido')}} @else @yield('textoContenido') @endif</textarea>
			  	</div>
			  </div>

			  {{-- Subir imagen --}}
			  <div class="form-group">
			  	<div class="col-xs-12 text-center titulos">
			  		<label for="imagenDePortada">Subir Im&aacute;gen de portada</label>
			  	</div>

				{{-- Errores de la imagen de portada --}}
			  	@foreach($errors->get('imagenDePortada') as $cadaErrorImagenDePortada)
					<div class="alert alert-danger" role="alert">
			    		<ul>
			    			<li>{{$cadaErrorImagenDePortada}}</li>
			    		</ul>
			    	</div>
		    	@endforeach

		    	{{-- Errores del checkbox de imagen de portada --}}
			  	@foreach($errors->get('mantenerImagen') as $cadaErrorCheckboxImagenDePortada)
					<div class="alert alert-danger" role="alert">
			    		<ul>
			    			<li>{{$cadaErrorCheckboxImagenDePortada}}</li>
			    		</ul>
			    	</div>
		    	@endforeach
				
				<?php
					$ruta= \Route::currentRouteAction();
					$rutaPartida= explode("@", $ruta);
					$action= (end($rutaPartida));
				?>
				<div class="col-xs-12" id="rowImagenDePortada">
					@if($action == 'edit')
						<input type="checkbox" name="mantenerImagen" id="mantenerImagen" value="1">
						<span>Mantener im&aacute;gen de portada</span>
				    @endif
				</div>
			    <div class="col-xs-12">
			    	<input type="file" class="form-control" name="imagenDePortada" id="imagenDePortada">
			    </div>
			  </div>
			  

			  <div class="col-xs-12" id="botonEnviar">
			  	<button type="submit" class="btn btn-success center-block">Crear</button>
			  </div>
			</form>
		</section>
	</div>
</div>

{{-- ///////////////////////// SCRIPTS //////////////////////////////// --}}

{{-- Script de Tinymce --}}
<script src="{{URL::asset('js/tinymce/tinymce.min.js')}}"></script>

{{-- Cargar el editor y configurarlo--}}
<script>
  tinymce.init({
    selector: '#contenido',
 
 	height: 150,
	  plugins: [
	    "advlist autolink autosave link image lists preview",
	    " wordcount visualblocks media",
	    " textcolor paste textcolor colorpicker"
	  ],

	  toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify |  formatselect fontselect fontsizeselect | removeformat",
	  toolbar2: "cut copy paste | bullist numlist | blockquote | undo redo | link image media | preview | forecolor backcolor |",
	  
	  menubar: false,
	  toolbar_items_size: 'medium',
  });
</script>