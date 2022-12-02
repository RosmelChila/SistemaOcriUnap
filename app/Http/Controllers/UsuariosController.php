<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $users=User::all();
        return view('administrador.usuarios',['users'=>$users]);
    }
}
