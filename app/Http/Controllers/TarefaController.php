<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();       
        return view('lista',['tarefas' => $tarefas]);
    }

    public function novo()
    {
        return view('novo');
    }

    public function salvar(Request $request)
    {
        //dd('Chegou em Salvar');
        //dd($request->all());

        $tarefa = new Tarefa;
        $tarefa->descricao = $request->input('descricao');        
        $tarefa->save();

        return redirect()->route('painel.index');

    }


    public function deletar($id)
    {       
        $tarefa = Tarefa::find($id);       
        $tarefa->delete();

        return redirect()->route('painel.index');

    }

    public function editar($id)
    {
        $tarefa = Tarefa::find($id);       
        return view('editar', ['tarefa' => $tarefa]);
    }

    public function editarAction(Request $request,$id)
    {
        $tarefa = Tarefa::find($id); 
        $tarefa->descricao = $request->input('descricao');      
        $tarefa->save();

        return redirect()->route('painel.index');
    }
}
