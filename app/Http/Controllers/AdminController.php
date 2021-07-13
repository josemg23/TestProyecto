<?php

namespace App\Http\Controllers;

use App\User;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function perfil()
    {
        return view('admin.usuarios.user.perfil');
    }


    // public function GuardarFoto(Request $request){
            
    //     $user = User::find(Auth::user()->id);
   
    //     if ($request->hasFile('imagen')) {
    //         if (isset($user->documento)) {
    //             $image_path = public_path() . $user->documento->archivo;
    //             unlink($image_path);
    //         }
    //         $archivo = $request->cotizacion;
    //         $nombre       = time() . '_' . $archivo->getClientOriginalName();
    //         $urldocumento = '/foto-perfil/' . $nombre;
    //         $archivo->storeAs('foto-perfil',  $nombre, 'public_upload');
    //         $documento    = new Document(['nombre' => $archivo->getClientOriginalName(), 'extension' => pathinfo($urldocumento, PATHINFO_EXTENSION), 'archivo' => $urldocumento]);
    //         $user->documento()->save($documento);
    //     }

    //     return redirect()->route('/admin/mi-perfil');


    // }
}
