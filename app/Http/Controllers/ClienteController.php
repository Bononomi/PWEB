<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ClienteController extends Controller{

    public function cliente(){
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
               
        return view('site.cliente',compact('titulo', 'rodape'));
    }
}