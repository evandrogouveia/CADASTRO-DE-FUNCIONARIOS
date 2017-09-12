<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller{
    
    public function cadastrar(Request $request){
        $data=array();
        $data["titulo"] = "Sistema de Cadastro de Funcionários";
        
        if($request->isMethod("POST")){
            $nome=$request->input("nome");
            $email=$request->input("email");
            $idade=$request->input("idade");
            $salario=$request->input("salario");
            
            if($nome == "" || $idade == "" || $email == "" || $salario == ""){
                $data["resp"] = "Preencha todos os campos!";
            }else{
                
                $f = \App\Funcionario::whereNomeAndEmail($nome, $email)->first();
                if($f == null){
                        
            $func = new \App\Funcionario();
            $func->nome=$nome;
            $func->email=$email;
            $func->idade=$idade;
            $func->salario=$salario;
            
            if($func->save()){
            $data["resp"] = $nome . ", cadastrado com sucesso!";
            }else{
                $data["resp"]=$nome . ", não cadastrado!";
            }
          }else{
              $data["resp"]= "Funcionário já cadastrado no sistema!";
          }
        }
        }
        return view('funcionario/cadastrar', $data);
    }
    
    public function buscar(Request $request){
        $data = array();
        if($request->isMethod("POST")){
            $nome = $request->input("nome");
            
            $lista = \App\Funcionario::where("nome", "like", $nome . "%")
                    ->select("*")
                    ->get();
            $data["lista"] = $lista;
        }
        
        return view('funcionario/buscar', $data);
    }
}
