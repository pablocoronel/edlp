<?php

namespace EstudiantesDeLP\Http\Controllers;

use Illuminate\Http\Request;

use EstudiantesDeLP\Http\Requests;
use EstudiantesDeLP\Http\Controllers\Controller;


class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

}
