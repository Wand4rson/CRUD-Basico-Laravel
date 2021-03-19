@extends('painel')

@section('content')
    <br/>

    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>        
        <th scope="col">Ações</th>  
        </tr>
    </thead>

    @foreach ($tarefas as $tarefa)
        <tbody>
            <tr>
                <th scope="row">{{$tarefa->id}}</th>
                <td>{{$tarefa->descricao}}</td>  
                <td>
                    <a href="{{route('painel.editar.form', $tarefa->id)}}">Editar</a>
                    <a href="{{route('painel.apagar', $tarefa->id)}}">Remover</a>
                </td> 

            </tr>
        </tbody>
    @endforeach

    </table>

@endsection