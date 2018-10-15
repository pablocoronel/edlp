<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Inicio
Route::get('/', 'InicioController@index');

// Campeonatos
Route::get('titulos', function(){
	return view('titulos');
});
// Route::get('/titulos', array('as' => 'titulos', function(){
// 	return view('titulos');
// }));

// Idolos del club
Route::get('idolos', function(){
	return view('idolos');
});

// Procesar Registro
Route::post('procesarRegistro', 'RegistroController@procesar');
// Procesar Registro de la invitacion (vista historias)
Route::post('procesarRegistroInvitacion', 'RegistroController@procesarInvitacion');

// Procesar login
Route::resource('log', 'LoginLogoutController');

// Desloguearse
Route::get('logout', 'LoginLogoutController@logout');

// Recursos de historias: index: listado, show: ver cada historia, create: agregar nueva historia
Route::resource('historias', 'HistoriaController');

// Mostrar las imagenes de portada en "listadoHistoria"
// Route::get('imagenPortada/{$id}/{$imagen}', function($id, $imagen){
// 	$path = storage_path().'/app/historiaPortada/'.$id.'/'.$imagen;

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);

//     return $response;
// });

Route::post('enviarComentario', 'ComentarioHistoriaController@store');

Route::get('invitacion', function(){
	return view('historias.invitacion');
})->middleware('invitacion');
