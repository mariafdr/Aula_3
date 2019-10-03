<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('SoEuPosso');
    }

    public function index()
    {
        return view('teste');
    }
    
    public function posta(Request $request)
    {
        return "Fazendo POST $request->nome";
    }

    public function put(Request $request)
    {
        return "Fazendo PUT $request->nome";
    }

    public function patch(Request $request)
    {
        return "Fazendo PATCH $request->nome";
    }

    public function delete(Request $request)
    {
        return "Fazendo DELETE $request->nome";
    }

}
