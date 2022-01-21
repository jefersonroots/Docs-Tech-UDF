<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Aluno;

use Illuminate\Auth\Middleware\Authorize;

class AlunoController extends Controller
{


    //

    public function cadastroAluno()
    {

        return view("cadastroAluno");

    }
/**

*@param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
* @param \App\Http\Controllers\Auth
*/
public function salvar(Request $request)
{
    $novo = new aluno;

    aluno::create($request->all());

    return redirect()->back() ->with('alert', 'Salvo com Sucesso!');

}

    public function perfil(Request $request)
    {

        return view("atualizaAluno");

      /*   $package = Aluno::find($id)
        ->width('Aluno')
        ->where('id','=',$id)
        ->get();
        return view('aluno.perfil', compact('Aluno')); */


    }


};

?>
