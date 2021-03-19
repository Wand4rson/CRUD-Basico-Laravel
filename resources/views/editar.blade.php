@extends('painel')

@section('content')
    <br/>
    <form method="post" action="{{route('painel.editar.salvar', $tarefa->id)}}">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">Editar Tarefa</label>
            <input type="text" class="form-control" name="descricao" value="{{$tarefa->descricao}}" placeholder="Editar Tarefa" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Salvar">

    </form>
@endsection