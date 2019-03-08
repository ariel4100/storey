<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionMedidaController extends Controller
{
    public function index()
    {
        return view('page.medidas.index');
    }
}
