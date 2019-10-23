<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $req, $sn){
        
        $n = $req->only('nome')['nome'];
        return "Hello world, $n $sn";
    }

    public function boaTarde($nome="Fulano"){                
        return view('boaTarde', ["nome" => $nome]);
    }
}
