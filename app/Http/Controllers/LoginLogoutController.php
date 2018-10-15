<?php

namespace EstudiantesDeLP\Http\Controllers;

use Illuminate\Http\Request;

use EstudiantesDeLP\Http\Requests;
use EstudiantesDeLP\Http\Controllers\Controller;

use EstudiantesDeLP\Http\Requests\LoginRequest;
use EstudiantesDeLP\Usuario;
use Auth;
use Session;
use Redirect;

class LoginLogoutController extends Controller
{
	public function index(){

	}
    
    public function store(LoginRequest $request){
        $recuerdame= $request['recuerdame'];
        
        if(Auth::attempt(['usuario' => $request['usuario'], 'password' => $request['password']], $recuerdame)){
            return back();
        }else{
            Session::flash('mensaje', 'Los datos son incorrectos');
            return back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
