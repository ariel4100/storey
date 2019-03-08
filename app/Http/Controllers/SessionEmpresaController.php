<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionEmpresaController extends Controller
{
    public function index()
    {
        return view('page.empresa.index');
    }
}
