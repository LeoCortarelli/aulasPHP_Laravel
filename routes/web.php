<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */


    // Retornando uma view
//Route::view('/jogos', 'jogos');


    // Retornando um texto
/* Route::get('jogos', function(){
    return "Testando o retorno de texto";
}); */


    // Enviando por parametro
//Route::view('jogos', 'jogos',['name' => 'GTA']);

    // Recebendo valores pela URL String
/* Route::get('/jogos/{name?}', function($name = null){ // Se a variavel tiver ? como name? e o $name estiver null ele vai rodar o programa mesmo sem passar parametros
    return view('jogos', ['nomeJogo' => $name]); // Trocar o nome da variavel na view para a atual: nomeJogo
})->where('name', '[A-Za-z]+'); // condição para que seja incerido apenas letras */ 

    // Recebendo valores pela URL numeros
/* Route::get('/jogos/{id?}', function($id = null){ // Se a variavel tiver ? como name? e o $name estiver null ele vai rodar o programa mesmo sem passar parametros
    return view('jogos', ['idJogo' => $id]);
})->where('id', '[0-9]+'); */ // condição para que seja incerido apenas numeros 

    // Adicionando o ID e um NOME
/* Route::get('/jogos/{id?}/{nome?}', function($id = null, $name = null){ // Se a variavel tiver ? como name? e o $name estiver null ele vai rodar o programa mesmo sem passar parametros
    return view('jogos', ['idJogo' => $id, 'nomeJogo' => $name]); // Colocar também na view
})->where(['id' => '[0-9]+', 'nome' => '[a-z]+']); */ // condição para que seja incerido apenas numeros

    // QUANDO CLICAR EM UM BOTÃO ELE REDIRECIONA PARA OUTRA ROTA
/* Route::get('jogos', function(){
    return view('jogos');
}); */

Route::get('/', function () {
    return view('welcome');
})->name('home-index');

    // Rota para erros
Route::fallback(function(){  // SE COLOCAR QUALQUER OUTRA ROTA QUE NÃO TENHA COMO /jogos ele cai aqui
    return "Erro ao localizar a rota!";
});


    // Aula De controllers
Route::get('/jogos', [JogosController::class, 'index']); // está chamando a função index