<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionContactoController extends Controller
{
    public function index()
    {
        return view('page.contacto.index');
    }
}
