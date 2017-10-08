<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigureController extends Controller
{
    public function crearCentroTrabajo()
    {
    	return view('configure.crearCentroTrabajo');
    }

    public function crearOrdenProduccion()
    {
    	return view('configure.crearOrdenProd');
    }

    public function crearTiempoCiclo()
    {
    	return view('configure.crearTiempoCiclo');
    }

    public function configurarProducto()
    {
    	return view('configure.configurarProducto');
    }

    public function crearResponsableOP()
    {
    	return view('configure.crearResponsableOP');
    }
}
