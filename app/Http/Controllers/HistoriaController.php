<?php

namespace EstudiantesDeLP\Http\Controllers;

use Illuminate\Http\Request;

use EstudiantesDeLP\Http\Requests;
use EstudiantesDeLP\Http\Controllers\Controller;

// Request de historias
use EstudiantesDeLP\Http\Requests\CrearHistoriaRequest;
use EstudiantesDeLP\Http\Requests\EditarHistoriaRequest;
// Modelo
use EstudiantesDeLP\Historia;
use EstudiantesDeLP\Comentario;
// Para manipular archivos
use Storage;
use Session;
use File;
use BD;
use Gate;

class HistoriaController extends Controller
{
    // Definicion de middleware en cuales metodos usarlo
    public function __construct(){
        $this->middleware('crearHistoria', ['only' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // // Usando las relaciones definidas en el modelo
        // relacion 1-N
        // $historias = \EstudiantesDeLP\Usuario::find(1)->historias;
        // return view('historias/listado', ['historia' => $historia, 'historias' => $historias]);
        // // En el html
        // @foreach ($historias as $uno)
        //     {{$uno->titulo}}
        //     <br>
        // @endforeach

        // relacion N-1
        // $hist = \EstudiantesDeLP\Historia::find(1);
        // echo $hist->usuarios->rol;
        // die();
        // exit();

        $historia= Historia::orderBy('id', 'desc')->paginate(4); //usando el modelo directamente - soft deleted
        // $historia= \DB::table('historias')->orderBy('id', 'desc')->paginate(4);// Con la facade DB
        return view('historias/listado', ['historia' => $historia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historias/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearHistoriaRequest $request)
    {
        // Salir si no es un archivo lo subido como imagen de portada
        if (!$request->hasFile('imagenDePortada')) {
            // Session::flash('rutaArchivo', 'No es un archivo');
            return back();
            exit();
        }

        // ultimo id de tabla historias:        
        $historiaIncluyendoBorrados= Historia::withTrashed();
        $historia= $historiaIncluyendoBorrados->get();
        $ultimaHistoria= $historia->last();

        if (is_null($ultimaHistoria)) {
            $id= 1;
        }else{
            $id= $ultimaHistoria->id + 1;
        }

        // Subcarpeta para la portada:
        $ruta= '/images/historiaPortada/'.$id.'/';
        
        $archivo= $request->file('imagenDePortada');
        $nombreArchivo= $archivo->getClientOriginalName();
        $direccionArchivo= $ruta.$nombreArchivo;

        if(Storage::exists($ruta)){
            Session::flash('rutaArchivo', 'No se pudo subir la imagen');
            return back();
            exit();
        }else{
            Storage::makeDirectory($ruta);
        }
        
        // Subir imagen:
        Storage::put($direccionArchivo, File::get($archivo));

        // Sale un error con la FK
        Historia::create([
            'titulo' => $request['titulo'],
            'contenido' => $request['contenido'],
            'nombre_portada' => $nombreArchivo,
            'id_usuario_creador' => \Auth::user()->id
        ]);

        Session::flash('guardado', 'La historia fue creada correctamente');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historia = Historia::find($id);

        if (is_null($historia)) {
            abort(404);
        }

        $comentariosPost= \DB::table('comentarios')
                                ->leftJoin('usuarios', 'comentarios.id_usuario', '=', 'usuarios.id')
                                    ->select('comentarios.*', 'usuarios.usuario')
                                    ->where('comentarios.id_historia', '=', $id)
                                    ->orderBy('comentarios.id', 'desc')
                                    ->get();

        return view('historias/ver', ['historia' => $historia, 'comentariosPost' => $comentariosPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historia= Historia::find($id);

        // Policy
        if (Gate::denies('edit', $historia)) {
            abort(403);
        }

        return view('historias/editar', ['historia' => $historia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarHistoriaRequest $request, $id)
    {
        $historia = Historia::find($id);

        // Policy
        if (Gate::denies('update', $historia)) {
            abort(403);
        }

        $historia->titulo= trim($request['titulo']);
        $historia->contenido= $request['contenido'];

        // Guardar la imagen de portada:
        if ($request->mantenerImagen == '1') {
            $historia->save();

            // Volver a la pantalla de edicion
            Session::flash('guardado', 'La historia fue editada correctamente');
            return back();            
        }else{
            // Salir si no es un archivo lo subido como imagen de portada
            if (!$request->hasFile('imagenDePortada')) {
                // Session::flash('rutaArchivo', 'No es un archivo');
                return back();
                exit();
            }

            // Subcarpeta para la portada:
            $ruta= '/images/historiaPortada/'.$id.'/';
            
            $archivo= $request->file('imagenDePortada');
            $nombreArchivo= $archivo->getClientOriginalName();
            $direccionArchivo= $ruta.$nombreArchivo;

            if(!Storage::exists($ruta)){
                Session::flash('rutaArchivo', 'No se pudo subir la imagen');
                return back();
                exit();
            }
            
            // Subir imagen:
            Storage::put($direccionArchivo, File::get($archivo));
            $archivo= $request->file('imagenDePortada');
            $nombreArchivo= $archivo->getClientOriginalName();
            
            $historia->nombre_portada= $nombreArchivo;
        }

        $historia->save();

        // Volver a la pantalla de edicion
        Session::flash('guardado', 'La historia fue editada correctamente');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historia= Historia::findOrFail($id);

        // Policy
        if (Gate::denies('destroy', $historia)) {
            abort(403);
        }

        $historia->delete();

        // Volver a la pantalla de listado
        return redirect('historias');
        exit();
    }
}
