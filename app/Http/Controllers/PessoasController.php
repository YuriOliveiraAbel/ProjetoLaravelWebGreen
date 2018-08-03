<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\Telefone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PessoasController extends Controller
{
    public $telefones_controller;
    public $pessoa;


    public function __construct(TelefonesController $telefones_controller)
    {
        $this->telefones_controller = $telefones_controller;
        $this->pessoa = new Pessoa();
    }


    public function index(){

        $list_pessoas = Pessoa::all(); //cria um lista e preenche ela com todas a pessoas do banco.
        return view('pessoas.index',[
            'pessoas'=>$list_pessoas
        ]);

    }

    public function novoView(){
        return view('pessoas.create');
    }

    public function store(Request $request){
        $pessoa = Pessoa::create($request->all());

        if($request->ddd && $request->telefone){
            $telefone = new Telefone();
            $telefone->ddd = $request->ddd;
            $telefone->telefone = $request->telefone;
            $telefone->pessoa_id = $pessoa->id;
            $this->telefones_controller->store($telefone);
        }

        return redirect("/pessoas")->with("message","Pessoa criada com sucesso");
    }

    public function excluirView($id){
        return view('pessoas.delete',[
            'pessoa' =>$this->getPessoa($id)
        ]);
    }

    public function destroy($id){
        $this->getPessoa($id)->delete();
        return redirect(url('pessoas'))->with('seccess','Excluido!');
    }
    
    public function update(Request $request){
        $pessoa = $this->getPessoa($request->id);
        $pessoa->update($request->all());
        return redirect('/pessoas');
    }

    public function getTelefonesController()
    {
        return $this->telefones_controller;
    }

    public function editarView($id){
        return view('pessoas.edit',[
            'pessoa' => $this->getPessoa($id)
        ]);
    }

    protected function getPessoa($id){
        return $this->pessoa->find($id);
    }
}