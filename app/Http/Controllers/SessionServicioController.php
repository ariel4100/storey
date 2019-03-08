<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionServicioController extends Controller
{
    public function index()
    {
        return view('page.servicios.index');
    }
}
