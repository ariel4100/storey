<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionBlogController extends Controller
{
    public function index()
    {
        return view('page.blog.index');
    }
}
