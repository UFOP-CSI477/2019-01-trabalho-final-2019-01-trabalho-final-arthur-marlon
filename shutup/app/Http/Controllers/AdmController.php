<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    public function index()
    {
        if (Auth::user()->tipo != 1){
            session()->flash('mensagem', 'Acesso permitido apenas a Administradores!');
            return redirect()->route('home');
        }


        return view('adm');
    }
}
