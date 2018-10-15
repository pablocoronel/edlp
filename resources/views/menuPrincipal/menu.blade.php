<header id="headerMenuPrincipal">
    <nav id="navMenuPrincipal" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- Logo y boton hamburguesa -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuPrincipal" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::asset('/')}}"><img src="{{URL::asset('images/logo.jpg')}}" id="logoMenuPrincipal" alt="Logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- links, botones e inputs -->
        <div class="collapse navbar-collapse" id="menuPrincipal">
          <!-- lado comun -izquierdo- -->
          <ul class="nav navbar-nav">
            <li><a href="{{URL::asset('idolos')}}">&Iacute;dolos</a></li>
            <li><a href="{{URL::asset('titulos')}}">T&iacute;tulos</a></li>
            <li><a href="{{URL::asset('historias')}}">Historias</a></li>
          </ul>
            
          <!-- lado derecho -->
          <ul class="nav navbar-nav navbar-right">
            {{-- Si el usuario esta logueado --}}
             @if(Auth::check())
                <li>
                  <p>{{Auth::user()->usuario}}</p>
                </li>
                <li>
                  <button type="button" id="salir" class="btn btn-primary" onClick="javascript:window.location.href='{{URL::asset('logout')}}'">Salir</a>
                </li>
                {{-- Boton con link --}}
                {{-- <li><a class="btn btn-primary" href="/logout">Salir</a></li> --}}
            @else

                @if(count($errors) > 0)
                    @if ($errors->has('usuario'))
                    {{-- ANTERIOR con foreach y li --}}
                          {{-- @foreach($errors->all() as $cadaError) --}}
                            {{-- <li>
                              <div class="alert alert-danger" role="alert">
                                {{$cadaError}}
                              </div>
                            </li> --}}
                            <script>
                                var errorUsuario= "El campo usuario es obligatorio";

                                $(document).ready(function(){
                                  $("#divUsuario").attr('class', 'form-group has-error ');
                                  $("#divUsuario").attr('data-toggle', 'tooltip');
                                  $("#divUsuario").attr('title', errorUsuario);
                                  $('#divUsuario').attr('data-placement', 'bottom');
                                  $('#divUsuario').tooltip('show');
                                });
                            </script>
                          {{-- @endforeach --}}
                    @endif

                    @if(($errors->has('password')))
                        <script>
                            var errorPassword= "El campo clave es obligatorio";

                            $(document).ready(function(){
                              $("#divClave").attr('class', 'form-group has-error ');
                              $("#divClave").attr('data-toggle', 'tooltip');
                              $("#divClave").attr('title', errorPassword);
                              $('#divClave').attr('data-placement', 'bottom');
                              $('#divClave').tooltip('show');
                            });
                        </script>
                    @endif
                @endif
                
                @if(Session::has('mensaje'))
                  {{-- ANTERIOR --}}
                  {{-- <li>
                      <div class="alert alert-danger" role="alert">
                          {{Session::get('mensaje')}}
                      </div>
                  </li> --}}
                  <script>
                      var errorDatos= "Los datos son incorrectos";

                      $(document).ready(function(){
                        $("#divUsuario").attr('class', 'form-group has-error ');
                        $("#divClave").attr('class', 'form-group has-error ');
                        
                        $("#divUsuario").attr('data-toggle', 'tooltip');
                        $("#divUsuario").attr('title', errorDatos);
                        $('#divUsuario').attr('data-placement', 'bottom');
                        $('#divUsuario').tooltip('show');
                      });
                  </script>
                @endif


                    {!!Form::open(['route'=>'log.store', 'method'=>'POST', 'class' => 'navbar-form navbar-left'])!!}
                    {{-- <form action="log/store" method="post" class="navbar-form navbar-left" onSubmit="javascript:return login()"> --}}
                  
                    {{csrf_field()}}

                    <div id="divUsuario" class="form-group has-default">
                      <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario..." value="{{old('usuario')}}">
                    </div>

                    <div id="divClave" class="form-group has-default">
                      <input type="password" name="password" id="clave" class="form-control" placeholder="Contrase&ntilde;a...">
                    </div>

                    <div id="divClave" class="form-group has-default">
                      <input type="checkbox" name="recuerdame" id="recuerdame">
                      <span>No cerrar sesi&oacute;n</span>
                    </div>
                    <button type="submit" class="btn btn-default btn-success">Ingresar</button>
                  {{-- </form> --}}
                  {!!Form::close()!!}
                <li>
                  <button type="button" data-toggle="modal" data-target="#registrarse" class="btn btn-default navbar-btn btn-primary">Registrarse</button>
                </li>
            
            @endif

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</header>