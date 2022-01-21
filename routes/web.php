<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Aluno;


/* Route::get( '/Aluno/cadastroAluno2', action: 'AlunoController@cadastroAluno2')->name( name: 'aluno.cadastroAluno2');
 */
Auth::routes();


Route::post('Aluno/salvar', 'AlunoController@salvar')->name('aluno.salvar');
Route::get('Aluno/cadastro', 'AlunoController@cadastroAluno')->name('aluno.cadastroAluno');
Route::get('Aluno/perfil', 'AlunoController@perfil')->name('aluno.perfil');



Route::get( '/', function () {
    return 'Olá';
});



// APENAS USUARIOS LOGADOS ->

Route::group(['middleware'=>['auth']], function (){


    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->action('LoginController@form');

        return 'Olá';
    })->name('logout');

});

Auth::routes();
