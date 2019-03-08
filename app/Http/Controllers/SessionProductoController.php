<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionProductoController extends Controller
{
    public function index()
    {
        return view('page.productos.index');
    }
}
