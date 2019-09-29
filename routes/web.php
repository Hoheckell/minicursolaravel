<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rota de abertura do projeto
Route::get('/',function(){
    return view('entrada');
});

//Formulário de login
Route::get('/loginusuario',"UsersController@login")->name('login');

//Pra onde o formulário vai quando enviado
Route::post('/sendlogin',"UsersController@logaruser")->name('postalogin');

//Rotas dentro deste grupo são restritas ao usuário logado

Route::group(['middleware'=>['auth']],function(){

    //Rota de saída do sistema logout
    Route::get('/logout',function(){
        Auth()->logout();
        return redirect()->route('login');
    })->name('logout');
    
    Route::get('/interno','UsersController@interno')->name('interno');
    Route::get('/adduser','UsersController@interno')->name('cadastrausuarios');

    Route::resource("users","UsersController");
    Route::resource("contatos","ContatosController");
    Route::resource("enderecos","EnderecosController");
    Route::resource("telefones","TelefonesController");

});
