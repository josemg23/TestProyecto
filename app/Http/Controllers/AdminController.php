<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('cruds.post.indice');
    }

    public function index2()
    {
        return view('cruds.utilidades.indice');
    }

    public function index3()
    {
        return view('admin.roles.index');
    }

    public function index4()
    {
        return view('admin.usuarios.index');
    }
}
