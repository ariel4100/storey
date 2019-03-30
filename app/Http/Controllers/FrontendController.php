<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function empresa()
    {
        return view('page.empresa');
    }

    public function descargas()
    {
        return view('page.descargas');
    }

    public function soluciones()
    {
        return view('page.soluciones');
    }

    public function servicios()
    {
        return view('page.servicios');
    }

    public function contacto()
    {
        return view('page.contacto');
    }

    public function calidad()
    {
        return view('page.calidad');
    }
}
