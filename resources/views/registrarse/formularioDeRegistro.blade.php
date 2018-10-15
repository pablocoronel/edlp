<!-- Modal -->
        <div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="registrarseLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              
              <!-- Header del modal -->
              <div class="modal-header text-center">
                <!-- crucecita de cierre -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registrarseLabel">Registrarse</h4>
              </div>
              
            
            <form class="form-horizontal" method="POST" action="{{URL::to('procesarRegistro')}}" onSubmit="javascript:return registro()">

                {{-- Agregar un tokem --}}
                {!!csrf_field()!!}
              
              <!-- Cuerpo del modal -->
                <div class="modal-body">
                    {{-- Ver errores --}}
                 {{--  @if(redirect()->back() == 'procesarRegistro') --}}
                    @if(count($errors) > 0)
                        @if ($errors->has('usuarioRegistro') || ($errors->has('claveRegistro')) || ($errors->has('emailRegistro')))
                              <div class="alert alert-danger" role="alert">
                                <ul>
                                  @foreach($errors->all() as $cadaError)
                                      <li>{{$cadaError}}</li>
                                  @endforeach
                                </ul>
                              </div>
                        @endif
                    @endif

                    <div id="recuadroUsuario" class="form-group">
                        <label for="usuarioRegistro" class="col-sm-3 control-label">Usuario</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="usuarioRegistro" id="usuarioRegistro" placeholder="Usuario" data-toggle="tooltip" data-placement="top" value="{{old('usuarioRegistro')}}">
                        </div>
                    </div>

                    <div id="recuadroClave" class="form-group">
                        <label for="claveRegistro" class="col-sm-3 control-label">Contrase&ntilde;a</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="claveRegistro" id="claveRegistro" placeholder="Contrase&ntilde;a" data-toggle="tooltip" data-placement="top">
                        </div>
                    </div>

                    <div id="recuadroEmail" class="form-group">
                        <label for="emailRegistro" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="emailRegistro" id="emailRegistro" placeholder="Email" data-toggle="tooltip" data-placement="top" value="{{old('emailRegistro')}}">
                        </div>
                    </div>
                </div>
              
                <!-- Footer del modal -->
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-default">Registrarme</button>
                </div>
            </form>
            
            </div>
          </div>
        </div>