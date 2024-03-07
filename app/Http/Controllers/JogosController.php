<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller{

    public function index(){
        //dd('Hello word'); // print para teste
        // return view('jogos'); // chamando a view dentro de resources > views > jogos.blade.php

        // Trabalhano com parametros 
        $nome = 'gta';
        $id = 1;
        return view('jogos', ['nome' => $nome, 'id' => $id]); // Passando a variavel nome para outra variavel da view
    }

}
