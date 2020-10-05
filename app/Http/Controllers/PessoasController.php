<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function registrar()
    {
        return view('pessoas.registrar');
    }
    public function store(Request $request)
    {
        Pessoa::create([
           'nome'=> $request->nome,
           'sobrenome'=>$request->sobrenome,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'pessoajuridica'=>$request->pessoajuridica,
            'cpf'=>$request->cpf,
            'cnpj'=>$request->cnpj,
        ]);
        return "Cadastro realizado com sucesso!";
    }
    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.show',['pessoa'=>$pessoa]);
    }
    public function index()
    {
        $pessoa = Pessoa::all();
        return view('pessoas.index',['pessoa'=>$pessoa]);
    }
    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.edit',['pessoa'=>$pessoa]);
    }
    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update([
           'nome'=>$request->nome,
           'sobrenome'=>$request->sobrenome,
           'email'=>$request->email,
           'telefone'=>$request->telefone,
           'pessoajuridica'=>$request->pessoajuridica,
           'cpf'=>$request->cpf,
           'cnpj'=>$request->cnpj,
        ]);
        return "Dados atualizados com sucesso!";
    }
    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();

        return "Registro excluido com sucesso!";
    }

}
