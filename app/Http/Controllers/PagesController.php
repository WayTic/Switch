<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('Auth.login');
    }

    public function config()
    {
    	return view('configure');
    }

    public function control()
    {
    	return view('control');
    }

    public function performance()
    {
    	return view('performance');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
