<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoriaController extends Controller{

    public function categoria(){
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
               
        return view('site.categoria',compact('titulo', 'rodape'));
    }
}